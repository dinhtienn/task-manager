<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

        // if ($username == '' && $password == '') {
        //     $error = 'Bạn chưa nhập thông tin!';
        //     return view('login', compact('error'));
        // }
        // if ($password != 1998) {
        //     $error = 'Mật khẩu chưa chính xác, vui lòng kiểm tra lại!';
        //     return view('login', compact('error'));
        // }
        // if ($username === 'employee') {
        //     return redirect()->route('employee.homepage');
        // }
        // if ($username === 'manager') {
        //     return redirect()->route('manager.homepage');
        // }
        // if ($username === 'ceo') {
        //     return redirect()->route('ceo.homepage');
        // }
        // $error = 'Tên tài khoản chưa chính xác, vui lòng kiểm tra lại!';
        // return view('login', compact('error'));
        if ($username == 'ceo' && $password == 'nhom1') {
            return Redirect::to('https://dinhtienn.github.io/nhom1-hci/CEO_Step/CEO_Homepage.html');
//            return redirect()->route('ceo.homepage');
        } elseif ($username == 'manager' && $password == 'nhom1') {
            return redirect()->route('manager.homepage');
        } elseif ($username == 'employee' && $password == 'nhom1') {
            return redirect()->route('employee.homepage');
        } elseif ($username == 'home' && $password == 'nhom2') {
            return Redirect::to('http://192.168.43.110:8080/HCI');
        }  elseif ($username == 'home' && $password == 'nhom3') {
            return Redirect::to('https://dinhtienn.github.io/nhom3-hci/examples/dashboard.html');
        } elseif ($username == 'ceo' && $password == 'nhom4') {
            return Redirect::to('https://dinhtienn.github.io/nhom4-hci/BGD/homescreen.html');
        } elseif ($username == 'manager' && $password == 'nhom4') {
            return Redirect::to('https://dinhtienn.github.io/nhom4-hci/TruongPhong/homescreen.html');
        } elseif ($username == 'employee' && $password == 'nhom4') {
            return Redirect::to('https://dinhtienn.github.io/nhom4-hci/nhanvien/homescreen.html');
        } elseif ($username == 'ceo' && $password == 'nhom5') {
            return Redirect::to('https://dinhtienn.github.io/nhom5-hci/CEO/Home.html');
        } elseif ($username == 'manager' && $password == 'nhom5') {
            return Redirect::to('https://dinhtienn.github.io/nhom5-hci/Manager/Home.html');
        } elseif ($username == 'employee' && $password == 'nhom5') {
            return Redirect::to('https://dinhtienn.github.io/nhom5-hci/Employee/Home.html');
        } elseif ($username == 'home' && $password == 'nhom6') {
            return Redirect::to('https://dinhtienn.github.io/nhom6-hci/');
        } elseif ($username == 'ceo' && $password == 'nhom8') {
            return Redirect::to('https://dinhtienn.github.io/nhom8-hci/');
        } elseif ($username == 'manager' && $password == 'nhom8') {
            return Redirect::to('https://dinhtienn.github.io/nhom8-hci/index-gd.html');
        } elseif ($username == 'employee' && $password == 'nhom8') {
            return Redirect::to('https://dinhtienn.github.io/nhom8-hci/index-ktdn.html');
        } elseif ($username == 'home' && $password == 'nhom9') {
            return Redirect::to('https://dinhtienn.github.io/nhom9-hci/tongcongty.html');
        } elseif ($username == 'home' && $password == 'nhom10') {
            return Redirect::to('https://dinhtienn.github.io/nhom10-hci/a1-project');
        } elseif ($username == 'home' && $password == 'nhom11') {
            return Redirect::to('https://dinhtienn.github.io/nhom11-hci/custommer.html');
        }
        $error = 'Tên tài khoản hoặc mật khẩu chưa chính xác, vui lòng kiểm tra lại!';
        return view('login', compact('error'));
    }
}
