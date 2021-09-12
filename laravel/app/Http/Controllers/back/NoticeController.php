<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Http\Requests\CreateNoticeRequest;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    // お知らせ表示
    public function index()
    {
        // モデルに取得の処理を書いて、メソッド呼び出し
        $notices = Notice::allNotice();

        // ビューを呼ぶ
        return view('back.index', compact('notices'));
    }

    // お知らせ作成画面
    public function create()
    {
        return view('back.create');
    }

    // お知らせ投稿処理
    public function store(CreateNoticeRequest $request, Notice $notice)
    {
        // 公開・非公開をboolean型に変換
        $isPublic = $request->is_public === 'true';

        $image = "";

        if ($request->hasFile('image')) {
            // 画像あり
            $request->file('image')->store('/public/images');
            $image = $request->file('image')->hashName();
        }

        $notice->create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image,
            // 'user_id' => Auth::id(),
            'is_public' => $isPublic,
            'published_at' => now(),
        ]);

        // リターンでお知らせ画面表示
        return redirect()->route('back.index');
    }

    // お知らせ編集画面
    public function edit(int $id)
    {
        $notice = Notice::publicFindId($id);

        return view('back.edit', compact('notice'));
    }

    // 編集更新
    public function update(CreateNoticeRequest $request, Notice $notice)
    {
        // 公開・非公開をboolean型に変換
        $isPublic = $request->is_public === 'true';

        $notice->publicFindId($request->id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'image' => '',
            // 'user_id' => Auth::id(),
            'is_public' => $isPublic,
            'published_at' => now(),
        ]);

        return redirect()->route('back.index');
    }

    // 削除処理(idがある場合の引数は大切)
    public function destroy(int $id, Notice $notice)
    {
        $notice->publicFindId($id)->delete();

        return redirect()->route('back.index');
    }

    // 詳細表示
    public function show(int $id)
    {
        // IDで紐付けて, そいつだけ表示
        $notice = Notice::publicFindId($id);

        // ビューを呼ぶ
        return view('back.show', compact('notice'));
    }
}
