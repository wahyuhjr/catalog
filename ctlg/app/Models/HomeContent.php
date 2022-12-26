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
        'link_tokped',
        'link_tiktok',
        'link_shopee',
        'link_instagram',
        'link_wa',
    ];

    public $timestamps = false;
}
