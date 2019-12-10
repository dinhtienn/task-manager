<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');

        if ($username == '' && $password == '') {
            $error = 'Bạn chưa nhập thông tin!';
            return view('login', compact('error'));
        }
        if ($password != 1998) {
            $error = 'Mật khẩu chưa chính xác, vui lòng kiểm tra lại!';
            return view('login', compact('error'));
        }
        if ($username === 'employee') {
            return redirect()->route('employee.homepage');
        }
        if ($username === 'manager') {
            return redirect()->route('manager.homepage');
        }
        if ($username === 'ceo') {
            return redirect()->route('ceo.homepage');
        }
        $error = 'Tên tài khoản chưa chính xác, vui lòng kiểm tra lại!';
        return view('login', compact('error'));
    }
}
