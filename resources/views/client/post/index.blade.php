@extends('client.layout.master')
@section('title',"Blog")
@section('content')
@include('client.partial.slide')
<section class="blog-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    @foreach ($dataPost as $item)
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="blog-content">
                                <div class="blog-img image-hover">
                                <a href="{{route('post.detail',['slug' => $item->slug,'id'=>$item->id])}}"><img src="{{$item->photo}}" class="img-responsive img-200" alt=""></a>
                                <span class="post-date">{{date('Y-m-d',strtotime($item->created_at))}}</span>
                                </div>
                                <h4><a href="{{route('post.detail',['slug' => $item->slug,'id'=>$item->id])}}">{{$item->title}}</a></h4>
                                <p>{{$item->brief}}</p>
                                <a class="thm-btn" href="{{route('post.detail',['slug' => $item->slug,'id'=>$item->id])}}">Xem Thêm</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- pagination -->
                <div class="pagination-inner">
                    <!-- pager -->

                    <!-- pagination -->
                    {{$dataPost->links()}}

                </div>
            </div>
            <!-- sideber -->
            <div class="col-md-3 col-sm-4">
                <div class="sidber-box cats-widget">
                    <div class="cats-title">
                        All Categories
                    </div>
                    <ul>	
                        <li><a href="#">All</a> <span>50</span></li>
                        <li><a href="#">Top tours</a> <span>9</span></li>
                        <li><a href="#">Romance</a> <span>32</span></li>
                        <li><a href="#">Beach</a> <span>22</span></li>
                        <li><a href="#">Adventure</a> <span>50</span></li>
                        <li><a href="#">Events</a> <span>12</span></li>
                        <li><a href="#">Parks</a> <span>32</span></li>
                        <li><a href="#">Family</a> <span>22</span></li>
                        <li><a href="#">Norway</a> <span>39</span></li>
                        <li><a href="#">Places to visit</a> <span>12</span></li>
                        <li><a href="#">Photography Idea</a> <span>9</span></li>
                        <li><a href="#">Tips for travelers</a> <span>39</span></li>
                    </ul>
                </div>
                <!-- popular post -->
                <div class="sidber-box popular-post-widget">
                    <div class="cats-title">Popular Post </div>
                    <div class="popular-post-inner">
                        <ul>
                            <li><a href="blog-details.html">Standard Post with Gallery</a>Wednesday - Nov 23, 2016</li>
                            <li><a href="blog-details.html">Standard post with preview Video</a>Wednesday - Nov 23, 2016</li>
                            <li><a href="blog-details.html">Standard post with preview Picture</a>Wednesday - Nov 23, 2016</li>
                            <li><a href="blog-details.html">Standard Post with Gallery</a>Wednesday - Nov 23, 2016</li>
                        </ul>
                    </div>
                </div>
                <!-- tags -->
                <div class="sidber-box tags-widget">
                    <div class="cats-title">Tags </div>
                    <div class="tags-inner">
                        <a class="ui tag">Nature</a>
                        <a class="ui tag">Fashion</a>
                        <a class="ui tag">Wordpress</a>
                        <a class="ui tag">Photo</a>
                        <a class="ui tag">Travel</a>
                        <a class="ui tag">Hotel</a>
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
    </div>
</section>
@endsection