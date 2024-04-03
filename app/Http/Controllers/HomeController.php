<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(5);

        return view('pages.home', [
            'title' => 'Homepage',
            'articles' => $articles
        ]);
    }

    public function detail($slug)
    {
        $article = Article::where('slug', $slug)->first();

        return view('pages.detail', [
            'title' => $article->title,
            'article' => $article
        ]);
    }
}
