<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\comment_replies;

class post_comments extends Model
{
    use HasFactory;
    public function comment_replies()
    {
        return $this->hasMany(comment_replies::class, 'post_comments');
    }
}
