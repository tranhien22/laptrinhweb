<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    //function show view login
    public function showLogin()
    {
        return view("login");
    }

    public function showRegister()
    {
        return view("register");
    }

    //hàm xử lý đăng kí tài khoản mới
    public function registerNewUser(Request $request)
    {   
        //validation data
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect(route('showlogin'))->with(200,'Create new user success');
    }

    /// hàm login
    public function loginNewUser(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, chuyển hướng tới trang chính
            return redirect(route('pageIndex'));
        }

        // Đăng nhập thất bại, hiển thị form đăng nhập lại với thông báo lỗi
        return redirect()->back()->withInput()->withErrors(['email' => 'Email hoặc mật khẩu không chính xác']);
    }
    public function showIndex()
    {
        return view("index");
    }

}
