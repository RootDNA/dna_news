<?php

namespace App\Http\Controllers;

use App\Models\articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// $newsapi = new NewsApi($your_api_key);
use Mail;


class newController extends Controller
{
    public function index(Request $request)
    {
        try {
            $date = date_create();
            $from = date_format($date, "Y-m-d");
            $response = Http::get('https://newsapi.org/v2/top-headlines?country=us&from=' . $from . '&sortBy=popularity&apiKey=8e030570c6d946c6ab4d5193c201794d');

            if ($response->object()->status == "ok") {
                $articles = $response->object()->articles;
                $article = $articles[0];
            } else {
                $article = array();
            }
        } catch (\Throwable $th) {
            $article = array();
        }

        return view("index", compact('articles'));
    }
    public function details(Request $request, $id)
    {
        try {
            $date = date_create();
            $from = date_format($date, "Y-m-d");
            // $from=date_format(date_modify($date,"+15 days"),"Y-m-d");

            $response = Http::get('https://newsapi.org/v2/everything?q=' . $id . '&' . $from . '&sortBy=popularity&apiKey=8e030570c6d946c6ab4d5193c201794d');
            if ($response->object()->status == "ok") {
                $articles = $response->object()->articles;
                $article = $articles[0];
            } else {
                $article = array();
            }
        } catch (\Throwable $th) {
            $article = array();
        }

        // $response1 = Http::get('https://newsapi.org/v2/top-headlines?sources=' . $article->source->id . '&from=' . $from . '&sortBy=popularity&apiKey=8e030570c6d946c6ab4d5193c201794d');

        // $articles = $response1->object()->articles;


        return view("detail", compact('articles', "article"));
    }
    public function newsletter(Request $request)
    {


        try {
            $email = $request->email;

            Mail::send('emails.welcome', ['email' => $email, 'msg' => "You have successfully register to the new letter", 'title' => "DNA News letter"], function ($message) use ($email) {

                $message->to($email)->subject('News letter registration');
            });
        } catch (\Throwable $th) {
            //throw $th;
        }


        return redirect('/');
    }
}
