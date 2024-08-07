<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();

        return view("layouts.articles", compact('articles'));



    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $article = Article::with('comments.user')
            ->find($id);

        return view('articles.show', ['article' => $article])
        ;
    }
    //for create
    public function create()
    {

        return view('articles.articles')
        ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
