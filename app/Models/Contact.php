<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Contact extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table    = 'contacts';
    protected $fillable = ['name' ,'phone', 'address', 'email', 'email_additional_1', 'email_additional_2', 'description'];
}
