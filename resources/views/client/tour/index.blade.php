@extends('client.layout.master')
@section('title',"Tour")
@section('content')
<section class="header" style="background-image: url(assets/images/header-1920x1135-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h1>Tours</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('client.partial.search')
<!-- hotel -->
<section class="tour-inner">
    <div class="container">
        <div class="row">
            <!-- collapse map -->
            <div class="col-sm-12">
                <div class="collapse" id="collapseMap">
                    <!-- The element that will contain Google Map. This is used in both the Javascript and CSS above. --> 
                    <div id="map"></div>
                </div>
            </div>
            <!-- sideber -->
            <div class="col-sm-4 col-md-3">
                <!-- tour -->
                <div class="sidber-box cats-widget">
                        <div class="cats-title">
                            Địa Điểm
                        </div>
                        <ul>
                            @foreach ($destination as $item)
                                <li><a href="{{route('destination.tour',['slug'=>$item->slug ,'id'=> $item->id])}}">{{$item->translation()->name}}</a><span>{{count($item->tour)}}</span></li>
                            @endforeach
                        </ul>
                    </div>
                <!-- help center -->
                <div class="sidber-box help-widget">
                    <i class="flaticon-photographer-with-cap-and-glasses"></i>
                    <h4>Need <span>Help?</span></h4>
                    <a href="#" class="phone">+001620214460</a>
                    <small>Monday to Friday 9.00am - 7.30pm</small>
                </div>
            </div>
            <div class="col-sm-8 col-md-9">
                @if(isset($input))
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Tìm Thấy: <span>{{count($dataTour)}} Kết Quả</span></h4>
                        </div>
                    </div>
                @else
                @endif()
                <div class="hotel-list-content">
                    <div class="row grid-margin">
                        @foreach ($dataTour as $item)
                        <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                            <div class="grid-item-inner">
                                <div class="grid-img-thumb">
                                    <!-- ribbon -->
                                    @if ($item->sale>0)
                                            <div class="ribbon"><span>sale {{$item->sale}}%</span></div> 
                                    @endif
                                    <a href="{{route('tour.detail',['slug'=>$item->slug,'id'=>$item->id])}}"><img src="{{$item->avatar}}" alt="1" class="img-responsive img-250" /></a>
                                </div>
                                <div class="grid-content">
                                        <div class="grid-price text-right">
                                                @if($item->sale>0)
                                                    Only <span>{{number_format(($item->price - ($item->price*$item->sale)/100),0)}}<sub>VND</sub></span>
                                                    <span><strike>{{$item->price}}</strike><sub>VND</sub></span>
                                                @else
                                                    Only <span>{{number_format($item->price,0)}} <sub>VND</sub> </span>
                                                @endif
                                        </div>
                                    <div class="grid-text">
                                    <div class="place-name">{{$item->destination->translation()->name}}</div>
                                            <div class="travel-times">
                                                <h4 class="pull-left">{{$item->translation('vi')->title}}</h4>
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
                            </div> <!-- ../grid item -->                            
                        @endforeach
                    </div>
                </div>
                <!-- pagination -->
                <div class="pagination-inner">
                    <!-- pager -->
                    {{$dataTour->links()}}
                </div>
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
