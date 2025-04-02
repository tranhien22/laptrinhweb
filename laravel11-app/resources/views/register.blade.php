
@extends('dashboardlogin') 
    
@section('content')  
        <div class="registration-form">
            <form action="{{route('postRegister')}}" method="POST">
            @csrf
            <h2>Màn hình đăng ký</h2>
            
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" id="username" name="name">
            </div>
            <div class="form-group">
                <label for="username">Email</label>
                <input type="text" id="email" name="email">
            </div>
            
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password">
            </div>
            
            <div class="form-group">
                <label for="confirm-password">Nhập lại mật khẩu</label>
                <input type="password" id="confirm-password" name="confirm-password">
            </div>
            
            {{-- <div class="form-group">
                <label for="phone">phone</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="address">address</label>
                <input type="text" id="address" name="address">
            </div> --}}
           
            <div class="button-group">
                <a href="#" class="have-account">Đã có tài khoản</a>
                <button class="register-button">Đăng ký</button>
            </div>
        </form>
        </div>
        
        <div class="footer">
            Lập trình web @01/2024
        </div>
        @endsection('content')
