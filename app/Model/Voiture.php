<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $fillable = ['title', 'description', 'price', 'image', 'user_id'];
}
