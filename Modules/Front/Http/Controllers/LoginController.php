<?php

namespace Modules\Front\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $title = 'ログイン';

        return view('front::pages.player.login', compact('title'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::guard('player')->attempt($credentials)) {
            return redirect()->route('player.mypage', ['player' => Auth::guard('player')->user()]);
        }

        return back()->withErrors([
            'login' => ['ログインに失敗しました'],
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // ログアウトしたらログインフォームにリダイレクト
        return redirect()->route('index')->with([
            'logout_msg' => 'ログアウトしました',
        ]);
    }
}
