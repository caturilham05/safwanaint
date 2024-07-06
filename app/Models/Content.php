<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Content extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table    = 'contents';
    protected $fillable = ['content_category_id', 'title', 'intro', 'content', 'active'];
    protected $casts    = ['active' => 'boolean'];

    public function contentCategory()
    {
        return $this->hasOne(ContentCategory::class, 'id', 'content_category_id');
    }
}
