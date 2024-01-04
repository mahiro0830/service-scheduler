<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {

    }

    /**
     * ログインページ
     *
     * @return object view
     */
    public function login() : object
    {
        return view( 'login.login' );
    }

    /**
     * ダッシュボードページ
     *
     * @return object view
     */
    public function dashboard() : object
    {
        return view( 'login.dashboard' );
    }
}
