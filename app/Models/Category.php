<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;

    protected $table = 'categories';

    protected $guarded = [];

    public function getPictureAttribute()
    {
        return $this->getMedia();
    }

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class,'id','category_id');
    }

}
