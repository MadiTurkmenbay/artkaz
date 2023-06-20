<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function auth(Request $request)
    {

        if ($request->input('password') == env('PASSWORD') && $request->input('email') == env('LOGIN')) {
            $user = User::find(1);
            Auth::login($user);
            return redirect(route('admin.main'));
        } else {
            return back()->withErrors(['err' => 'Ошибка']);
        }
    }
}
