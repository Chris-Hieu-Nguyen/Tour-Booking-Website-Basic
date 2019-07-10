@extends('client.layout.master')
@section('title',"Tour Travel - Mạng bán tour hàng đầu tại việt nam")
@section('content')
@include('client.partial.slide')
@include('client.partial.search')
            <!-- popular tour -->
<section class="popular-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="title">
                        <h2>Tours Đang Hot</h2>
                        <p>Chùm tour đang có giá ưu đãi nhất</p>
                    </div>
                </div>
            </div>
            <div class="row thm-margin">
                <div id="popular-slide" class="owl-carousel">
                    @foreach ($dataTourSale as $item)
                        <div class="item">
                            <div class="grid-item-inner">
                                <div class="grid-img-thumb">
                                    <!-- ribbon -->
                                    <div class="ribbon"><span>sale {{$item->sale}}%</span></div>
                                    <a href="{{route('tour.detail',['slug'=>$item->slug,'id'=>$item->id])}}"><img src="{{$item->avatar}}" alt="1" class="img-responsive img-200" /></a>
                                </div>
                                <div class="grid-content">
                                    <div class="grid-price text-right">
                                        Only <span>{{number_format(($item->price - ($item->price*$item->sale)/100),0)}}<sub>VND</sub></span>
                                        <span><strike>{{$item->price}}</strike><sub>VND</sub></span>
                                    </div>
                                    <div class="grid-text">
                                        <div class="place-name">{{$item->destination->translation()->name}}</div>
                                        <div class="travel-times">
                                            <h4 class="pull-left">{{$item->translation()->title}} </h4>
                                            <span class="pull-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
</section>
<section class="service-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="title">
                    <h2>Dịch vụ của chúng tôi</h2>
                    <p>TourTravel sẽ mang đến những điều tuyệt vời nhất dành cho bạn !</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 inner-box">
                    <article>
                        <div class="icon"><span class="flaticon-placeholder"></span></div>
                        <div class="content-text">
                            <h5>Điểm đến đa dạng</h5>
                            <p>Với 348 điểm đến thú vị trên toàn thế giới</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-3 inner-box">
                    <article>
                        <div class="icon"><span class="flaticon-map"></span></div>
                        <div class="content-text">
                            <h5>Đặt chỗ nhanh chóng</h5>
                            <p>Thanh toán đơn giản,an toàn và linh hoạt</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-3 inner-box">
                    <article>
                        <div class="icon"><span class="flaticon-lemonade"></span></div>
                        <div class="content-text">
                            <h5>Ẩm thực phong phú</h5>
                            <p>Các món ăn vô cùng đa dạng, được làm bởi những đầu bếp hàng đầu.</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-3 inner-box">
                    <article>
                        <div class="icon"><span class="flaticon-party"></span></div>
                        <div class="content-text">
                            <h5>Bữa tiệc sôi động</h5>
                            <p>Những bữa tiệc sôi động khiến bạn không thể bỏ lỡ.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- destination -->
<section class="destination">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="title">
                    <h2>ĐIỂM ĐẾN YÊU THÍCH</h2>
                    <p>Với {{count($dataDes)}} điểm đến thú vị trên toàn thế giới.</p>
                </div>
            </div>
        </div>
        <div class="row thm-margin">
            @foreach ($dataDestination as $item)
                <div class="col-md-3 col-sm-4 thm-padding">
                    <div class="destination-grid">
                        <a href="#"><img src="{{$item->photo}}" class="img-responsive img-200" alt=""></a>
                        <div class="mask">
                            <h2>{{$item->translation()->name}}</h2>
                            <a href="{{route('destination.tour',['slug'=>$item->slug ,'id'=> $item->id])}}" class="thm-btn">Xem Tour</a>
                        </div>
                        <div class="dest-name">
                            <h5>{{$item->area->translation()->name}}</h5>
                            <h4>{{$item->translation()->name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- package section -->
<section class="package">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="title">
                    <h2>Tour mới nhất</h2>
                    <p>Một bộ sưu tập tuyệt vời các gói tour của chúng tôi.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($dataTour as $item)
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="package-wiget">
                        <div class="grid">
                            <figure class="effect-milo">
                                <img src="{{$item->avatar}}" class="img-responsive img-200" alt="">
                                <figcaption>
                                    <div class="effect-block">
                                        <h3>{{$item->translation('vi')->title}}</h3>
                                        <div class="package-ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <button onclick="window.location.href='/tour/{{$item->slug}}.{{$item->id}}.html'" type="button" class="thm-btn">Xem Ngay </button>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="package-content">
                            <h5>{{$item->translation('vi')->name}}</h5>
                            <div class="package-price">from
                                <span class="price">
                                    <span class="amount">{{number_format($item->price,0)}} VND</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Counter -->
<section class="counter-inner">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="count-content">
                    <div class="count-icon">
                        <i class="flaticon-earth-globe"></i>
                    </div>
                    <div class="count">
                        <h1 class="count-number">348</h1>
                        <div class="count-text">Destinations</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="count-content">
                    <div class="count-icon">
                        <i class="flaticon-cabin"></i>
                    </div>
                    <div class="count">
                        <h1 class="count-number">89</h1>
                        <div class="count-text">Hotels</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="count-content">
                    <div class="count-icon">
                        <i class="flaticon-photographer-with-cap-and-glasses"></i>
                    </div>
                    <div class="count">
                        <h1 class="count-number">987</h1>
                        <div class="count-text">Tourists</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="count-content">
                    <div class="count-icon">
                        <i class="flaticon-airplane-flight-in-circle-around-earth"></i>
                    </div>
                    <div class="count">
                        <h1 class="count-number">891</h1>
                        <div class="count-text">Tour</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog section -->
<section class="blog-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="title">
                    <h2>Bài Viết Mới</h2>
                    <p>Theo Dõi Những Bài Viết Mới Nhất Của Chúng Tôi</p>
                </div>
            </div>
        </div>
        <div class="row thm-margin">
            <div id="blog-slide" class="owl-carousel">
                <!-- blog post item -->
                @foreach ($dataPost as $item)
                    <div class="item">
                        <div class="blog-content">
                            <div class="blog-img image-hover">
                                <a href="{{route('post.detail',['slug' => $item->slug,'id'=>$item->id])}}"><img src="{{$item->photo}}" class="img-responsive img-200" alt=""></a>
                                <span class="post-date">{{date('d-m-Y',strtotime($item->created_at))}}</span>
                            </div>
                            <h4><a href="{{route('post.detail',['slug' => $item->slug,'id'=>$item->id])}}">{{$item->title}}</a></h4>
                            <p>{{$item->brief}}</p>
                        </div>
                    </div>
                @endforeach
                <!-- blog post item -->
            </div>
        </div>
    </div>
</section>
<!-- Newsletter -->
<section class="get-offer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <span>Subscribe to our Newsletter</span>
                <h2>& Discover the best offers!</h2>
            </div>
            <div class="col-sm-7">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Your Email" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="flaticon-paper-plane"></i> Subscribe</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
        $('.tour').on('change', function () {
            var valueSelected = $(this).find("option:selected").val();
            var text = $(this).find("option:selected").text();
            alert(text)
        });
        
</script>
<script>
                //range slide
    $("#range").ionRangeSlider({
        type: "double",
        grid: true,
        min: 0,
        max: 200,
        from: 50,
        to: 150,
        prefix: "$"
    });
</script>
@endsection