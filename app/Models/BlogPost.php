<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = 'blogposts'; // za tinker donja crta bug
    protected $fillable = ['unique']; // ovo znaci da iz massassigmenta moze biti fillable

    // protected $fillable = ['title', 'content']; // ovo znaci da iz massassigmenta moze biti fillable

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
