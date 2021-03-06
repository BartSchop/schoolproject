<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['title', 'content', 'user_id', 'tag', 'description'];
}
