<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'status_id', 'titre', 'price', 'description'];

    public function imageArticles()
    {
        return $this->hasMany(ImageArticle::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
