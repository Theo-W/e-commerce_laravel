<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArtricleRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\ImageArticle;
use App\Models\Status;

class AdminArticleController extends Controller
{
    public function index()
    {
        $articles = Article::
        join('categories', 'categories.id', '=', 'articles.category_id')
            ->join('statuses', 'statuses.id', '=', 'articles.status_id')
            ->select('articles.*', 'categories.name as category_name', 'statuses.color as  status_color')
            ->get();

        //dd($articles);

        return view('admin.article.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        $status = Status::all();

        return view('admin.article.create', compact('categories', 'status'));
    }


    public function edit(int $id)
    {
        $article = Article::find($id);

        return view('admin.article.edit', compact('article'));
    }

    public function delete(int $id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('admin.article.index');
    }
}
