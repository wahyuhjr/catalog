<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\bumbu;
use App\Models\Selai;
use App\Models\DataContent;
use App\Models\HomeContent;
use App\Models\DetailProduk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'products' => Post::get(),
            // 'contents' => DataContent::get(),
            'contents' => HomeContent::get(),
            'details' => DetailProduk::get(),
            'selai' => Selai::get(),
            'bumbu' => bumbu::get(),
        ]);
    }
}