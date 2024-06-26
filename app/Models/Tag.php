<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        	'post_id', 
		    'category_id', 
	        'slug',		
	        'content'
    ];


    public function post(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'post_id');
    }
}
