<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduk extends Model
{
    use HasFactory;
    protected $table = 'detail_produk';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title_detail',
        'desc_detail',
        'harga',
        'image_detail',
    ];

    public $timestamps = false;
}
