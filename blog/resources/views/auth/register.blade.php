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
                        <form method="POST" class="login" action="">
                            @csrf
                            <div class="form-fields">
                                <h2>Đăng ký</h2>
                                <p class="form-row form-row-wide">
                                    <label>Họ và tên <span class="required">*</span></label>
                                    <input type="text" name="name" id="username" class="form-control"
                                           placeholder="Nguyễn Quang Tuấn">
                                    @if($errors->first('name'))
                                        <span class="text-danger">{{$errors->first('name')}}</span>
                                    @endif
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Email <span class="required">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email" value="" placeholder="tuannq@gmail.com">
                                    @if($errors->first('email'))
                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                    @endif
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Mật khẩu <span class="required">*</span></label>
                                    <input class="form-control" type="password" name="password" id="password" placeholder="********">
                                    @if($errors->first('password'))
                                        <span class="text-danger">{{$errors->first('password')}}</span>
                                    @endif
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Điện thoại <span class="required">*</span></label>
                                    <input type="number" class="form-control" name="phone" id="phone" value="" placeholder="0948325896">
                                    @if($errors->first('phone'))
                                        <span class="text-danger">{{$errors->first('phone')}}</span>
                                    @endif
                                </p>
                            </div>
                            <div class="form-action">
                                <p class="lost_password"><a href="#">Lost your password?</a></p>
                                <div class="actions-log">
                                    <button type="submit" class="form-control btn-success">Đăng ký</button>
                                </div>
                                <label for="rememberme" class="inline">
                                    <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember
                                    me </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
