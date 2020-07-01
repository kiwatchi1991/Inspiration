<?php

namespace inspiration\Http\Controllers\Auth;

use inspiration\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        // ここから
        if (isset($_SERVER['HTTP_REFERER'])) {
            $intended = $_SERVER['HTTP_REFERER'];
        } else {
            $intended = '/';
        }
        session(['url.intended' => $intended]);
        // ここまで追加
        return view('auth.login');
    }

    protected function authenticated()
    {
        $intended = session('url.intended');
        if (parse_url($intended, PHP_URL_PATH) == '/') {
            // ↓↓元々
            $user_id = Auth::user()->id;
            return redirect()->route('users.show',$user_id)->with('flash_message', 'ログインしました');
            // ↑↑元々
        } else {
            return redirect($intended)->with('flash_message', 'ログインしました');
            // return redirect('/')->with('flash_message', 'ログインしました');
        }
    }

    protected function loggedOut()
    {
        return redirect('/')->with('flash_message', 'ログアウトしました');
    }
}
