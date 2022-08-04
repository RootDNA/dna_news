<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [newController::class, "index"]);
Route::get("/articles/{id}", [newController::class, "details"]);
Route::get("/category/{id}", [newController::class, "category"]);

Route::post("/newsletter", [newController::class, "newsletter"])->name("newsletter");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard/{cat?}/{num?}', [AdminController::class, "dashboard"])->name('dashboard');
    Route::post('/dashboard', [AdminController::class, "saveArticle"])->name('saveArticle');
    Route::post('/deleteArticle', [AdminController::class, "deleteArticle"])->name('deleteArticle');
});

Route::get('storage/images/{filename}', function ($filename) {
    $path = storage_path('app\public\images\\' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
