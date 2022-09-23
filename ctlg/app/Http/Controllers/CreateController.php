<?php

namespace App\Http\Controllers;

use App\Models\content;
use Illuminate\Http\Request;


class CreateController extends Controller
{
    public function index()
    {
        return content::all();
    }
}
