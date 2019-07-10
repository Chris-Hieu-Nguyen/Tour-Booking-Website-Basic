<nav id="mainNav" class="navbar navbar-fixed-top">
    <div class="container">
        <!--Brand and toggle get grouped for better mobile display--> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="assets/images/logo.png" class="img-resposive" alt="">
            </a>
        </div>
        <!--Collect the nav links, forms, and other content for toggling--> 
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('home')}}">{{ __('front.home')}}</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">{{ __('front.destination')}}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach ($dataCate as $item)
                            @if(count($item->area)>0)
                                <li class="dropdown-submenu">
                                    <a href="#" tabindex="-1" class="dropdown-toggle" data-toggle="dropdown">{{$item->translation()->name}}</a>
                                    <ul class="dropdown-menu">
                                        @foreach ($item->area as $area)
                                            <li><a href="{{route('destination.area',['slug' => $area->slug,'id'=>$area->id])}}">{{$area->translation()->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li><a>{{$item->translation()->name}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{route('tour.all')}}">{{__('front.tour')}}</a></li>
            <li><a href="{{route('blog')}}">{{__('front.blog')}}</a></li>
            <li><a href="{{route('home')}}">{{__('front.contact')}}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right hidden-sm">
                @if(Sentinel::getUser())
                    <li><a class="" href="{{ route('profile') }}"><i class="fa fa-user" aria-hidden="true"></i> {{Sentinel::getUser()->first_name}}</a></li>
                    <li><a class="" href="{{route('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> {{__('front.cart')}}({{count(Cart::content())}})</a></li>
                @else
                <li><a class="" href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> {{__('front.login')}}</a></li>
                @endif
                <li  style="cursor:pointer;">
                    <a  class="dropdown-toggle" data-toggle="dropdown" style="">
                    <i class="fa fa-language"></i>
                    {{__('front.lang')}}<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                          <li><a href="?lang=vi">Vietnamese</a></li>
                          <li><a href="?lang=en">English</a></li>
                    </ul>
                </li>
            </ul>
        </div> <!-- /.navbar-collapse --> 
    </div> <!-- /.container --> 
</nav> 