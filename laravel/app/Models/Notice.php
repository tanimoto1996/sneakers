<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'image',
        'user_id',
        'is_public',
        'published_at',
    ];

    protected $casts = [
        'is_public' => 'boolean',
        'published_at' => 'datetime',
    ];

    // 公開の記事のみ取得
    public function scopePublic(Builder $query)
    {
        return $query->where('is_public', true);
    }

    // 公開の記事一覧を公開した順に取得
    public function scopePublicList(Builder $query)
    {
        return $query
            ->public()
            ->latest('published_at')
            ->paginate(6);
    }

    // ユーザーと紐付け
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
