<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{
    //
    //function show view login
    public function showLogin()
    {
        return view("login");
    }

    public function showUpdate(Request $request){
        $user_id = $request->get('id');
        $user = User::find($user_id);
        return view('update', ['user'=>$user]);
    }

    public function showRegister()
    {
        return view("register");
    }
    public function showList(){
        $lstuser = User::all();
        return view("list", compact('lstuser'));
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
            'address' => $request->address
            // 'sdd'=>$request->sdd,
            // 'mailne'=>$request->mailne,
          
        ]);
        return redirect(route('showlogin'))->with(200,'Create new user success');
    }

    public function postUpdate(Request $request){
        $input = $request->all();
        $user = User::find($input['id']);
        $user->name = $input['username'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->phone = $input['phone'];
        $user->address = $input['address'];
       
        $user->save();
        return redirect(route('showList'))->withSuccess('you have signed-in');
    }

    /// hàm login
    public function loginNewUser(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, chuyển hướng tới trang chính
            return redirect(route('showList'));
        }

        // Đăng nhập thất bại, hiển thị form đăng nhập lại với thông báo lỗi
        return redirect()->back()->withInput()->withErrors(['email' => 'Email hoặc mật khẩu không chính xác']);
    }
    // public function showIndex()
    // {
    //     return view("index");
    // }

}
