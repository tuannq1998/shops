@if(isset($article))
<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="single-post">
        <div class="post-thumb">
            <a href="#">
                <img style="width: 370px; height: 280px" src="{{pare_url_file($article->avatar)}}" alt="">
            </a>
        </div>
        <div class="post-thumb-info">
            <div class="post-time">
                <a href="#">Beauty</a>
                <span>/</span>
                <span>Post by</span>
                <span>BootExperts</span>
            </div>
            <div class="postexcerpt">
                <p style="height: 40px">{{$article->name}}</p>
                <a href="#" class="read-more">Xem thêm</a>
            </div>
        </div>
    </div>
</div>
@endif
