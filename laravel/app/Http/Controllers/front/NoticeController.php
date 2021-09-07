<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
    // お知らせ表示
    public function index()
    {
        // モデルに取得の処理を書いて、メソッド呼び出し

        // ビューを呼ぶ
        return view('front.index');
    }

    // 詳細表示
    public function show(int $id)
    {
        // IDで紐付けて, そいつだけ表示

        // ビューを呼ぶ
    }
}
