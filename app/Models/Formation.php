<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
        'start_date',
    ];
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
}
