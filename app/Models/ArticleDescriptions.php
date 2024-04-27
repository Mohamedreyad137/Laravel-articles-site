<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ArticleDescriptions extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;

    protected $table = 'article_descriptions';

    protected $guarded = [];

    public function getPictureAttribute()
    {
        return $this->getMedia();
    }

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class,'article_id','id');
    }

}
