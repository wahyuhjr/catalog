<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    protected $table = "home";
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'desc',
        'about_title',
        'about_desc',
        'about_image',
     ];

     public $timestamps = false;
}
