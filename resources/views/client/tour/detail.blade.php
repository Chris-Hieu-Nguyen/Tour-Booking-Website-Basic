@extends('client.layout.master')
@section('title',"Tour")
@section('content')
<section class="header" style="background-image: url(assets/images/header-1920x1135-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h1>{{$tour->translation()->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tour-details-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div id="tour-slide" class="owl-carousel owl-theme">
                        <div class="item"><img src="{{$tour->avatar}}" class="img-responsive" alt=""></div>
                    </div>
                    <h3>Tổng Quan</h3>
                    <p>
                        {!!$tour->translation('vi')->description!!}
                    </p>
                    <div class="separator"></div>
                    <h2>Bình Luận ({{count($dataComment)}})</h2>
                    <div class="comments-container">
                        <h3>Reviews </h3>
                        <ul class="comments-list">
                            @foreach ($dataComment as $item)
                            <li>
                                <div class="comment-main-level">
                                    <!-- Avatar -->
                                        <div class="comment-avatar"><img src="assets/images/avtar-1.jpg" alt=""></div>
                                        <div class="comment-box">
                                            <div class="comment-content">
                                                <cite class="comment-author">{{$item->user->first_name.' '.$item->user->last_name}}</cite>
                                                <p>{{$item->content}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Comment Form -->
                    <form method="post" action="{{route('comment.tour',['id' => $tour->id])}}">
                        @csrf
                        <div class="comment-form">
                            <h3>Bình Luận</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="message" placeholder="Your Comment*" rows="5"></textarea>
                                    </div>
                                    {!! $errors->has('message') ? '<p class="text-danger">'.$errors->first('message').'</p>' : '' !!}
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="thm-btn">Gửi Bình Luận</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <div class="sidber-box booking_price">
                        <div class="price">
                            {{-- <h3>{{number_format($tour->price,0)}}<sup>vnd</sup></h3> --}}
                            @if($tour->sale>0)
                                <h1>{{number_format(($tour->price - ($tour->price*$tour->sale)/100),0)}}<sup>đ</sup>/Người</h1>
                                <span class="text-danger"> Giá Gốc:<strike>{{$tour->price}}</strike><sup>đ</sup></span>
                            @else
                                <h1>{{number_format($tour->price,0)}} <sup>đ</sup> </h1>
                            @endif
                        </div>

                        <ul class="list-ok">
                            <li>Bắt Đầu: {{date('d-m-Y',strtotime($tour->start_day))}}</li>
                            <li>Kết Thúc: {{date('d-m-Y',strtotime($tour->end_day))}}</li>
                            <li>Số Người: {{$tour->max_people}} Người</li>
                            @if($tour->sale>0)
                                <li>Giảm giá: {{$tour->sale}} %</li>
                            @endif
                            <li>Trẻ Em (trên 8t): + {{$tour->price_child}}<sup>đ</sup> / Người</li>
                        </ul>
                        <div class="offer">*Free for childs under 8 years old</div>
                    </div>
                    <!-- booking -->
                    <div class="sidber-box tags-widget">
                        <div class="cats-title">Booking</div>
                        <div class="booking-form tour_booking">
                            <form method="post" action="{{route('cart.store',['id' => $tour->id])}}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Adults</label>
                                        <div class="input-group number-spinner">
                                            <span class="input-group-btn">
                                                <a class="btn btn-pm" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></a>
                                            </span>
                                            <input name="adults" type="text" class="form-control text-center" value="0">
                                            <span class="input-group-btn">
                                                <a class="btn btn-pm" data-dir="up"><span class="glyphicon glyphicon-plus"></span></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class=" col-sm-6">
                                        <label>Children(>8 tuổi)</label>
                                        <div class="input-group number-spinner">
                                            <span class="input-group-btn">
                                                <a class="btn btn-pm" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></a>
                                            </span>
                                            <input type="text" name="child" class="form-control text-center" value="0">
                                            <span class="input-group-btn">
                                                <a class="btn btn-pm" data-dir="up"><span class="glyphicon glyphicon-plus"></span></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                            @include('client.partial.message')
                                    </div>
                                </div>
                                <button type="submit" class="thm-btn btn-block">Book now</button>
                            </form>
                        </div>
                    </div>
                    <!-- help center -->
                    <div class="sidber-box help-widget">
                        <i class="flaticon-photographer-with-cap-and-glasses"></i>
                        <h4>Need <span>Help?</span></h4>
                        <a href="#" class="phone">+001620214460</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>
                </div>
            </div>
            <!-- related tours -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="separator"></div>
                    <h3>Related Tours</h3>
                </div>
                @foreach ($relatedTour as $item)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="grid-item-inner">
                        <div class="grid-img-thumb">
                            <!-- ribbon -->
                            <div class="ribbon"><span>Popular</span></div>
                            <a href="#"><img src="{{$item->avatar}}" alt="1" class="img-responsive img-250" /></a>
                        </div>
                        <div class="grid-content">
                            <div class="grid-price text-right">
                                Only <span>{{$item->price}}<sub>VND</sub></span>
                            </div>
                            <div class="grid-text">
                            <div class="place-name">{{$item->destination->translation()->name}}</div>
                                <div class="travel-times">
                                    <h6 class="pull-left">{{$item->translation()->title}}</h6>
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
