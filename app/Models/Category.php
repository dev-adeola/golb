<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'content',
        'meta_title',
        'title',
        'parent_id'
    ];

    public function post(): HasMany 
    {
        return $this->hasMany(Post::class);
    }

    public function tag(): HasMany {
        return $this->hasMany(Tag::class);
    }

    public function subcategory(): HasMany 
    {
        return $this->hasMany(Subcategory::class);
    }
}
