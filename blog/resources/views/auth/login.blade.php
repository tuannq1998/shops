@extends('layouts.app_master_frontend')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href="index.html">Trang chủ</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>Đăng nhập</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="customer-login-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="customer-login my-account">
                        <form method="post" class="login" action="">
                            @csrf
                            <div class="form-fields">
                                <h2>Đăng nhập</h2>
                                <p class="form-row form-row-wide">
                                    <label>Email <span class="required">*</span></label>
                                    <input type="email" class="form-control" name="email" placeholder="tuannq@gmail.com">
                                    @if($errors->first('email'))
                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                    @endif
                                </p>
                                <p class="form-row form-row-wide">
                                    <label for="password">Mật Khẩu <span class="required">*</span></label>
                                    <input class="form-control" type="password" name="password" placeholder="********">
                                    @if($errors->first('password'))
                                        <span class="text-danger">{{$errors->first('password')}}</span>
                                    @endif
                                </p>
                            </div>
                            <div class="form-action">
                                <p class="lost_password"> <a href="#">Lost your password?</a></p>
                                <div class="actions-log">
                                    <button type="submit" class="form-control btn-success">Đăng Nhập</button>
                                </div>
                                <label for="rememberme" class="inline">
                                    <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
