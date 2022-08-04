<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// $newsapi = new NewsApi($your_api_key);

class newController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get('https://newsapi.org/v2/everything?q=Apple&from=2022-08-03&sortBy=popularity&apiKey=8e030570c6d946c6ab4d5193c201794d');

        $articles = $response->object()->articles;




        return view("index", compact('articles'));
    }
    public function details(Request $request, $id)
    {
        $response = Http::get('https://newsapi.org/v2/everything?q={$id}&from=2022-08-03&sortBy=popularity&apiKey=8e030570c6d946c6ab4d5193c201794d');

        $articles = $response->object()->articles;

        $articles = array();
        return view("detail", compact('articles'));
    }
}
