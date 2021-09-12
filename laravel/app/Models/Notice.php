<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

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

    // 公開・非公開の記事を取得
    public function scopeAllNotice(Builder $query)
    {
        return $query->latest('published_at')->get();
    }

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

    // 詳細記事を取得
    public function scopePublicFindId(Builder $query, int $id)
    {
        return $query
            ->public()
            ->findOrFail($id);
    }

    // ユーザーと紐付け
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    // 保存時user_idをログインユーザーに設定
    protected static function boot()
    {
        parent::boot();

        self::saving(function ($post) {
            $post->user_id = Auth::id();
        });
    }
}
