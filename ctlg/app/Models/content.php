<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    protected $table = 'content';
    use HasFactory;

    protected $fillable = [
        'id_content',
        'GambarBanner',
        'GambarAbout',
        'Deskripsi',
        'created_at',
    ];
}