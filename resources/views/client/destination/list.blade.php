@extends('client.layout.master')
@section('title',"Khu Vực")
@section('content')
@include('client.partial.slide')
@include('client.partial.search')
<section>
        <div class="destination">
            <div class="container">
                <div class="row">
                    <!-- sideber -->
                    <div class="col-sm-4 col-md-3">
                        <div class="sidber-box cats-widget">
                            <div class="cats-title">
                                {{$dataArea->first()->category->translation()->name}}
                            </div>
                            <ul>
                                @foreach ($dataArea as $item)
                            <li><a href="{{route('destination.area',['slug'=>$item->slug,'id'=> $item->id])}}">{{$item->translation()->name}}</a> <span>{{count($item->destination)}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- help center -->
                        <div class="sidber-box help-widget">
                            <i class="flaticon-photographer-with-cap-and-glasses"></i>
                            <h4>Need <span>Help?</span></h4>
                            <a href="#" class="phone">0395656862</a>
                            <small>Monday to Friday 9.00am - 7.30pm</small>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-9">
                        <div class="row thm-margin">
                            <div class="portfolio-items list-unstyled" id="grid">
                                 @foreach ($dataDestination as $item)
                                    <div class="col-sm-6 col-md-4 thm-padding">
                                        <div class="destination-grid">
                                            <a href="#"><img src="{{$item->photo}}" class="img-responsive img-250" alt=""></a>
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
                            </div> <!--end portfolio grid -->
                        </div>
                        <div class="pagination-inner">
                                {{$dataDestination->links()}}
                        </div>
                    </div>
                </div> <!--end row -->
            </div> <!-- end container-->
        </div>
    </section>
@endsection