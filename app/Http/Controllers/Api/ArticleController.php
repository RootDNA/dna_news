<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Arg;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Articles::all();
        return response()->json([
            "message" => "ok",
            'articles' => $products
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        try {
            $product = Articles::create($request->all());

            return response()->json([
                'message' => "Product saved successfully!",
                'product' => $product
            ], 200);
        } catch (\Throwable $th) {
            $product = Articles::create($request->all());

            return response()->json([
                'message' => "Product saved successfully!",
                'articles' => $product
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show($articles)
    {
        $article = Articles::find($articles);
        return response()->json([
            "status" => "ok",
            'message' => "Product updated successfully!",
            'article' => $article
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $articles)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArticleRequest $request, Articles $articles)
    {

        // $articles->update($request->all());

        // return response()->json([
        //     "status" => "ok",
        //     'message' => "Product updated successfully!",
        //     'article' => $articles
        // ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $articles)
    {
        $articles->delete();

        return response()->json([
            'message' => "Articles deleted successfully!",
        ], 200);
    }
}
