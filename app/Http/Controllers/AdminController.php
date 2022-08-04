<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articles;
use Mockery\Generator\StringManipulation\Pass\Pass;

class AdminController extends Controller
{
    function dashboard(Request $request, $cat = null, $nums = 1)
    {
        $n = 10;
        $skip = ($nums - 1) * $n;
        if (isset($cat)) {
            $path = $cat;
            if ($cat == "all") {
                $count = articles::count();
                $count = ceil($count / $n);
                $articles = articles::skip($skip)->take($n)->get();
            } else {
                $count = articles::where('type', $cat)->count();
                $count = ceil($count / $n);
                $articles = articles::where('type', $cat)->take($n)->skip($skip)->get();
            }
        } else {
            $count = articles::count();
            $count = ceil($count / $n);
            $articles = articles::skip($skip)->take($n)->get();
            $path = "all";
        }

        if ($request->session()->exists('cart')) {
            $datas = $request->session()->get('cart');
            $num = count($datas);
        } else {
            $num = 0;
        }

        return view('dashboard', compact("articles", "count", "nums", "path", "num"));
    }
    function saveArticle(Request $request)
    {


        $name = $request->file('image')->getClientOriginalName();


        $ext = $request->file('image')->getClientOriginalExtension();
        $image_path = "storage/" . $request->file('image')->storeAs('images', $name . "." . $ext, 'public');

        $product = articles::create([
            "title" => $request->input("title"),
            "author" => $request->input("author"),
            "content" => $request->input("content"),
            "description" => $request->input("description"),
            "type" => $request->input("type"),

            "urlToImage" => $image_path,
        ]);
        $product->save();
        return redirect("/dashboard");
    }
    function deleteArticle(Request $request)
    {
        try {
            Articles::where('id', $request->input('id'))->delete();
        } catch (\Throwable $th) {
           
        }
        return redirect("/dashboard");
    }
}
