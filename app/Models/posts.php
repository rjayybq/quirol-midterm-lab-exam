<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post_comments;

class posts extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->hasMany(posts::class, 'post');
    }
    public function post_comments()
    {
        return $this->hasMany(post_comments::class, 'post');
    }
}
