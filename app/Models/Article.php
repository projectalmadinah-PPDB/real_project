<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'image',
        'slug',
        'user_id',
        'category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class,'category_id');
    }
}
