<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageArticle extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
