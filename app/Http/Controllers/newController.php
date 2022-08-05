<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Mail;


class newController extends Controller
{
    public function index(Request $request)
    {
        $breaking = Articles::take(3)->get();
        try {
            $breaking = Articles::take(3)->get();
            $date = date_create();
            $from = date_format($date, "Y-m-d");
            $response = Http::get('https://newsapi.org/v2/top-headlines?country=us&from=' . $from . '&sortBy=popularity&apiKey=8e030570c6d946c6ab4d5193c201794d');

            if ($response->object()->status == "ok") {
                $articles = $response->object()->articles;
            } else {
                $articles = array();
            }
        } catch (\Throwable $th) {
            $articles = array();
        }

        return view("index", compact('articles', "breaking"));
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
            return redirect("geek");
        }

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

    public function category(Request $request, $id)
    {
        try {
            $date = date_create();
            $from = date_format($date, "Y-m-d");
            // $from=date_format(date_modify($date,"+15 days"),"Y-m-d");

            // $response = Http::get('https://newsapi.org/v2/everything?country=de&category=' . $id . '&' . $from . '&sortBy=popularity&apiKey=8e030570c6d946c6ab4d5193c201794d');
            $response = Http::get('https://newsapi.org/v2/top-headlines?category=' . $id . '&' . $from . '&apiKey=8e030570c6d946c6ab4d5193c201794d');
            if ($response->object()->status == "ok") {
                $articles = $response->object()->articles;
            } else {
                $articles = array();
            }
        } catch (\Throwable $th) {
            $articles = array();
        }

        return view("category", compact('articles', "id"));
    }
}
