<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notice;

class NoticeController extends Controller
{
    // お知らせ表示
    public function index()
    {
        // モデルに取得の処理を書いて、メソッド呼び出し
        $notices = Notice::publicList();

        // ビューを呼ぶ
        return view('front.index', compact('notices'));
    }

    // 詳細表示
    public function show(int $id)
    {
        // IDで紐付けて, そいつだけ表示
        $notice = Notice::publicFindId($id);

        // ビューを呼ぶ
        return view('front.show', compact('notice'));
    }
}
