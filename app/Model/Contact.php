<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable  = ['name', 'email', 'subject', 'message'];
}
