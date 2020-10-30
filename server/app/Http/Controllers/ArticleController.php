<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index' , [ 'articles' => $articles ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        // インスタンスの作成
        $article = new Article();

        // 値の用意
        $article->title = $request->title;
        $article->body = $request->body;
        $article->timestamps =false;

        // インスタンスに値を設定して保存
        $article->save();

        // 登録したらindexに戻る
        return redirect('/articles');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //showページに移動
        $article = Article::find($id);
        return view('articles.show' , [ 'article' => $article ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        // インスタンスの作成
        $article = Article::find($id);

        // 値の用意
        $article->title = $request->title;
        $article->body = $request->body;
        $article->timestamps = false;

        // インスタンスに値を設定して保存
        $article->save();

        // 登録したらindexに戻る
        return redirect('/articles');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
}
