<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests;
use Auth;

class ArticlesController extends Controller
{

    public function  __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $articles = Article::findOrFail($id);

        return view('articles.show', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(CreateArticleRequest $request)
    {
        $article = new Article($request->all());

        Auth::user()->articles()->save($article);

        return redirect('articles');
    }

    public function  edit($id)
    {

        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));

    }
}
 