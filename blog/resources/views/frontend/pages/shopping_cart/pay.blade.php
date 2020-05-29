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
                            <li class="home">
                                <a href="index.html">Giỏ hàng</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>Thanh toán</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-contact-area">
        <div class="container wrapper">
            <div class="row cart-body">
                <form class="form-horizontal" method="post" action="">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                        <!--REVIEW ORDER-->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Thông tin thanh toán
                                <div class="pull-right"><small><a class="afix-1" href="#">Edit Cart</a></small></div>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-sm-3 col-xs-3">
                                        <img class="img-responsive"
                                             src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg"/>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="col-xs-12">Product name</div>
                                        <div class="col-xs-12"><small>Quantity:<span>1</span></small></div>
                                    </div>
                                    <div class="col-sm-3 col-xs-3 text-right">
                                        <h6><span>$</span>25.00</h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <hr/>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-xs-3">
                                        <img class="img-responsive"
                                             src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg"/>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="col-xs-12">Product name</div>
                                        <div class="col-xs-12"><small>Quantity:<span>1</span></small></div>
                                    </div>
                                    <div class="col-sm-3 col-xs-3 text-right">
                                        <h6><span>$</span>25.00</h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <hr/>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-xs-3">
                                        <img class="img-responsive"
                                             src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg"/>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="col-xs-12">Product name</div>
                                        <div class="col-xs-12"><small>Quantity:<span>2</span></small></div>
                                    </div>
                                    <div class="col-sm-3 col-xs-3 text-right">
                                        <h6><span>$</span>50.00</h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <hr/>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <strong>Subtotal</strong>
                                        <div class="pull-right"><span>$</span><span>200.00</span></div>
                                    </div>
                                    <div class="col-xs-12">
                                        <small>Shipping</small>
                                        <div class="pull-right"><span>-</span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <hr/>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <strong>Order Total</strong>
                                        <div class="pull-right"><span>$</span><span>150.00</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--REVIEW ORDER END-->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                        <!--SHIPPING METHOD-->
                        <div class="panel panel-info">
                            <div class="panel-heading">Address</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <h4>Shipping Address</h4>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Country:</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="country" value=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-xs-12">
                                        <strong>First Name:</strong>
                                        <input type="text" name="first_name" class="form-control" value=""/>
                                    </div>
                                    <div class="span1"></div>
                                    <div class="col-md-6 col-xs-12">
                                        <strong>Last Name:</strong>
                                        <input type="text" name="last_name" class="form-control" value=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Address:</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" name="address" class="form-control" value=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>City:</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" name="city" class="form-control" value=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>State:</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" name="state" class="form-control" value=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" name="zip_code" class="form-control" value=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Phone Number:</strong></div>
                                    <div class="col-md-12"><input type="text" name="phone_number" class="form-control"
                                                                  value=""/></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Email Address:</strong></div>
                                    <div class="col-md-12"><input type="text" name="email_address" class="form-control"
                                                                  value=""/></div>
                                </div>
                            </div>
                        </div>
                        <!--SHIPPING METHOD END-->
                    </div>

                </form>
            </div>
            <div class="row cart-footer">

            </div>
        </div>
    </div>
@stop
