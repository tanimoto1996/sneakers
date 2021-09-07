<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'image',
        'is_public',
        'published_at',
    ];

    protected $casts = [
        'is_public' => 'boolean',
        'published_at' => 'timestamp',
    ];
}
