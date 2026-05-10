<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
    ];

    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('d F, Y');
    }
}
