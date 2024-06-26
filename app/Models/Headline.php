<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Headline extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'title'
    ];


    public function post(): BelongsTo 
    {
        return $this->belongsTo(Post::class);
    }
}
