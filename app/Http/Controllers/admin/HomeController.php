<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{
    public function setLang($locale) {
        if(session('language') == '') {
            app()->setLocale('en');
            session('language', 'en');
        }

        session()->put('language', $locale);
        return redirect()->back();
    }

    public function getIndex()
    {
        return view('admin.pages.home.index');
    }

    public function getLogin() {
        return view('auth.login');
    }

    public function postLogin(Request $request) {

        if(Auth::attempt([
            'email'     => $request->input('username'),
            'password'  => $request->input('password')
        ])){
            return redirect()->route('home');
        }

        return redirect()->back();
    }

    public function logOut() {
        Auth::logout();
        return redirect()->route('home');
    }
}
