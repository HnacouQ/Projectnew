@extends('layouts.home')
@section('content')
    <!-- Begin page top -->
        <section class="page-top">
            <div class="container">
                <div class="page-top-in">
                    <h2><span>Register</span></h2>
                </div>
            </div>
        </section>
    <!-- End page top -->
        <div class="row mb-6">
            <div class="col-md-4 col-md-offset-4">
                <form action="" method="POST" role="form" >
                    @csrf
                    <div class="form-group">
                        <label for="">Tên tài khoản</label>
                        <input type="text" class="form-control" id="" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input type="number" class="form-control" id="" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input type="text" class="form-control" id="" name="address">
                    </div>
                    <div class="form-group">
                        <label for="">email</label>
                        <input type="text" class="form-control" id="" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="password" class="form-control" id="" name="password">
                    </div>
                    <div class="form-group">
                        <label for="">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" id="" name="repass">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>

                
            </div>
        </div>

@endsection