<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Elequent;

class Post extends Elequent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $fillable = ['title','content','author'];
}
