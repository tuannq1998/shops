@if(isset($product))
<div class="col-lg-12 col-md-12">
    <div class="single-product first-sale">
        <div class="product-img">
            <a href="#">
{{--                {{dd('11111', $product->avatar)}}--}}
                <img class="primary-image" style="width: 213px; height: 260.33px" src="{{pare_url_file($product->avatar)}}" alt="">
                <img class="secondary-image" style="width: 213px; height: 260.33px" src="{{pare_url_file($product->avatar)}}" alt="">
            </a>
            <div class="action-zoom">
                <div class="add-to-cart">
                    <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                </div>
            </div>
            <div class="actions">
                <div class="action-buttons">
                    <div class="add-to-links">
                        <div class="add-to-wishlist">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                        <div class="compare-button">
                            <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                        </div>
                    </div>
                    <div class="quickviewbtn">
                        <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                    </div>
                </div>
            </div>
            <div class="price-box">
                <span class="new-price">{{number_format($product->price,0,',','.')}} đ</span>
            </div>
        </div>
        <div class="product-content">
            <h2 class="product-name"><a href="#">{{$product->name}}</a></h2>
        </div>
    </div>
</div>
@endif
