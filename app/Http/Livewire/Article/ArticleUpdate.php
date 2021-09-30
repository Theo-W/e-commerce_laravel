<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use App\Models\Category;
use App\Models\ImageArticle;
use App\Models\Status;
use Livewire\Component;

class ArticleUpdate extends Component
{
    public $titre, $price, $description, $category_id, $status_id;
    public $categories, $status, $article;
    public $images;
    public $articleId;

    protected $rules = [
        'article.titre' => 'required|min:3',
        'article.price' => 'required',
        'article.description' => 'required|min:3',
        'article.category_id'=> 'required',
        'article.status_id'=> 'required',
    ];

    protected $listeners = ['getArticleId'];

    public function getArticleId($articleId)
    {
        $this->articleId = $articleId;
    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->status = Status::all();
    }

    public function save(int $id)
    {
        $article = Article::find($id)->update([
            'titre' => $this->titre,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'status_id' => $this->status_id,
        ]);

        if (!isset($this->image)) {
            foreach ($this->image as $image) {
                $name = $image->store('imgArticle');

                ImageArticle::create([
                    'name' => $name,
                    'article_id' => $article->id
                ]);
            }
        }

        return redirect()->to('admin/article');
    }

    public function render()
    {
        //dd(ImageArticle::where('article_id', '=', $this->articleId)->get());
        return view('admin.article.component.article_update', [
            'images' => ImageArticle::where('image_articles.article_id', '=', $this->articleId)->get()
        ]);
    }
}
