<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesliderCategory extends Model
{
    use HasFactory;

    protected $table    = 'imageslider_categories';
    protected $fillable = ['name'];
}
