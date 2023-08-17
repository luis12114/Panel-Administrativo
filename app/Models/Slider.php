<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "slidermain";
    protected $primaryKey ="id_sliderMain";
    protected $fillable = ['title', 'description', 'url_video','url_animation'];
}
