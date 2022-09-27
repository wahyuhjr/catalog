<?php

namespace App\Http\Controllers;

use App\Models\DataContent;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'products' => Post::get(),
            'contents' => DataContent::get(),
        ]);
    }
}