<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'product';
    use HasFactory;
    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'nama',
        'gambar',
        'deskripsi',
        'harga',
        'updated_at',
        'created_at',
    ];
}