<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selai extends Model
{
    use HasFactory;
    protected $table = 'selai';
    protected $primaryKey = 'id_selai';

    protected $fillable = [
        'title_selai',
        'desc_selai',
        'harga',
        'image_selai',
    ];

    public $timestamps = false;
}
