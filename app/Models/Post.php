<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable =[
        "title",
        "description",
        "category_id",
        "slug",
        "user_id",
        "body",
        "imagePath",
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // We have a post and it belongsTo a category

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
