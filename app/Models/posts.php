<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post_comments;

class posts extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->hasMany(posts::class, 'Author');
    }
    public function post_comments()
    {
        return $this->hasMany(post_comments::class, 'publish');
    }
    protected $table = '';
    protected $guarded = [];
}
