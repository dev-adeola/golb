<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Author;
use App\Models\Headline;
use App\Models\PostMeta;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, HasSEO;
    protected $fillable = [
        'title',
        'meta_title',
        'slug',
        'content',
        'summary',
        'featured_image',  
        'author_id',
        'category_id',
        'post_tags',
        'subcategory_id'
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function tag(): HasMany 
    {
        return $this->hasMany(Tag::class);
    }

    public function headline(): HasOne 
    {
        return $this->hasOne(Headline::class);
    }

    public function postmeta(): HasOne 
    {
        return $this->hasOne(PostMeta::class);
    }

    public function getDynamicSEOData(): SEOData
    {
        // $pathToFeaturedImageRelativeToPublicPath = // ..;

        // Override only the properties you want:
        return new SEOData(
            title: $this->title,
            description: $this->excerpt,
            // image: $pathToFeaturedImageRelativeToPublicPath,
        );
    }
}
