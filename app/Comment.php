<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'name',
      'title',
      'email',
      'content',
      'post_id'
    ];
}
