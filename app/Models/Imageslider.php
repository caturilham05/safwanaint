<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Imageslider extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table    = 'imagesliders';
    protected $fillable = ['imageslider_category_id', 'title', 'intro', 'description', 'active'];

    public function imagesliderCategory()
    {
        return $this->hasOne(ImagesliderCategory::class, 'id', 'imageslider_category_id');
    }
}
