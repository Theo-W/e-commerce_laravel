<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class ArticleTable extends Component
{

    public function render()
    {
        return view('admin.article.component.article_table', [
            'articles' => Article::join('categories', 'categories.id', '=', 'articles.category_id')
                ->join('statuses', 'statuses.id', '=', 'articles.status_id')
                ->select('articles.*', 'categories.name as category_name', 'statuses.color as  status_color')
                ->get()
        ]);
    }
}
