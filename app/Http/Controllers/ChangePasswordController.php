<?php

namespace inspiration\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    /**
     *　パスワード変更入力ページ表示メソッド
     * 
     * @return Response パスワード変更入力ページ表示
     */
    public function index()
    {
        return view('auth.changePassword');
    }

    /**
     *　パスワード変更メソッド
     * 
     * @param array $request リクエストデータ
     * @var array $validated_data バリデーションデータ
     * @var object $user ユーザーデータ
     * @return Response パスワード変更入力ページ表示
     */
    public function changePassword(Request $request)
    {
        //現在のパスワードが正しいかを調べる
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            return redirect()->back()->with('error_message', '現在のパスワードが間違っています。');
        }

        //現在のパスワードと新しいパスワードが違っているかを調べる
        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            return redirect()->back()->with('error_message', '新しいパスワードが現在のパスワードと同じです。違うパスワードを設定してください。');
        }

        //パスワードのバリデーション。新しいパスワードは6文字以上、new-password_confirmationフィールドの値と一致しているかどうか。
        $validated_data = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //パスワードを変更
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect('/')->with('flash_message', 'パスワードを変更しました。');
    }
}
