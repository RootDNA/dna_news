<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// $newsapi = new NewsApi($your_api_key);

class newController extends Controller
{
    public function index(Request $request)
    {
        $date = date_create();
        $from = date_format($date, "Y-m-d");
        $response = Http::get('https://newsapi.org/v2/everything?q=Apple&from=' . $from . '&sortBy=popularity&apiKey=8e030570c6d946c6ab4d5193c201794d');

        $articles = $response->object()->articles;




        return view("index", compact('articles'));
    }
    public function details(Request $request, $id)
    {
        $date = date_create();
        $from = date_format($date, "Y-m-d");
        // $from=date_format(date_modify($date,"+15 days"),"Y-m-d");

        $response = Http::get('https://newsapi.org/v2/everything?q=' . $id . '&' . $from . '&sortBy=popularity&apiKey=8e030570c6d946c6ab4d5193c201794d');

        $articles = $response->object()->articles;


        return view("detail", compact('articles'));
    }
}
