<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bumbu extends Model
{
    use HasFactory;

    protected $table = 'bumbu';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title_bumbu',
        'desc_bumbu',
        'harga',
        'image_bumbu',
    ];

    public $timestamps = false;
}
