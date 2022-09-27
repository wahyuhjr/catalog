<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataContent extends Model
{
    use HasFactory;

    protected $table = "data_content";

    protected $fillable = [
       'identify',
       'value',
    ];
    public $timestamps = false;
}
