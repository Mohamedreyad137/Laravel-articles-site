<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Article extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;

    protected $table = 'articles';

    protected $guarded = [];

    public function getPictureAttribute()
    {
        return $this->getMedia();
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function articleDescriptions(): HasMany
    {
        return $this->hasMany(ArticleDescriptions::class,'id','article_id');
    }
}
