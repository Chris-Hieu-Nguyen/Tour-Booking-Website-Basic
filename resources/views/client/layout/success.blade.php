@extends('client.layout.master')
@section('title',"Done")
@section('content')
<section class="header" style="background-image: url(assets/images/header-1920x1135-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h1>Thanh Toán Thành Công</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tour-inner">
    <div class="container">
        <div class="row">
            <!-- sideber -->
            <div class="col-sm-4 col-md-3">
                <!-- tour -->
                <div class="sidber-box cats-widget">
                        <div class="cats-title">
                            Địa Điểm
                        </div>
                        <ul>
                            {{-- @foreach ($destination as $item)
                                <li><a href="{{route('destination.tour',['slug'=>$item->slug ,'id'=> $item->id])}}">{{$item->translation()->name}}</a><span>{{count($item->tour)}}</span></li>
                            @endforeach --}}
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
                <div class="hotel-list-content">
                    <div class="row grid-margin">
                        <div class="col-md-12 text-center">
                            <h3>Chúng tôi sẽ liên lạc với bạn ngay khi xác nhận đơn hàng.</h3>
                            <p style="color:black;">Cảm ơn bạn đã Sử dụng dịch vụ của chúng tôi !</p>
                            <img src="/assets/images/done.jpg" alt="">
                            <a href="{{route('home')}}" class="thm-btn btn-block">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection