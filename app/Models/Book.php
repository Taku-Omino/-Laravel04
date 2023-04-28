<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'author_id', 'comment'];
    protected $fillable = ['title', 'author_id', 'comment', 'updated_at', 'created_at', 'author' => 'default value'];


    public function user()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
