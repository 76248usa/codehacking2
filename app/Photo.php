<?php

namespace App;

use App\User;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['file'];

    protected $uploads = 'images/';

    
}
