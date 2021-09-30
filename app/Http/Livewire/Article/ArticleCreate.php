<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use App\Models\Category;
use App\Models\ImageArticle;
use App\Models\Status;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArticleCreate extends Component
{
    use WithFileUploads;

    public $titre, $price, $description, $category_id, $status_id;
    public $image;
    public $categoris, $status;

    public function mount()
    {
        $this->categories = Category::all();
        $this->status = Status::all();
    }

    public function new()
    {
        $article = Article::create([
            'titre' => $this->titre,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'status_id' => $this->status_id,
        ]);
        dump($article);

        foreach ($this->image as $image) {
            $name = $image->store('imgArticle');

            $image = ImageArticle::create([
                'name' => $name,
                'article_id' => $article->id
            ]);
        }
        
        return redirect()->route('admin.article.index');
    }

    public function render()
    {
        return view('admin.article.component.article_create');
    }
}
