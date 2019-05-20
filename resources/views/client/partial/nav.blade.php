<nav id="mainNav" class="navbar navbar-fixed-top">
    <div class="container">
        <!--Brand and toggle get grouped for better mobile display--> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index-2.html">
                <img src="assets/images/logo.png" class="img-resposive" alt="">
            </a>
        </div>
        <!--Collect the nav links, forms, and other content for toggling--> 
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index-2.html">{{ __('front.home')}}</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">{{ __('front.destination')}}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="index-2.html">Du Lịch Trong Nước</a></li>
						<li class="dropdown-submenu">
							<a href="#" tabindex="-1" class="dropdown-toggle" data-toggle="dropdown">Du Lịch Nước Ngoài</a>
							<ul class="dropdown-menu">
								<li><a href="hotels-grid.html">Châu Âu</a></li>
								<li><a href="hotels-grid.html">Châu Á</a></li>
								<li><a href="hotels-grid.html">Châu Mỹ</a></li>
								<li><a href="hotels-grid.html">Châu Đại Dương</a></li>
								<li><a href="hotels-grid.html">Châu Phi</a></li>
							</ul>
						</li>
                    </ul>
                </li>
                <li><a href="tours.html">{{__('front.tour')}}</a></li>
                <li><a href="blog-grid-1.html">{{__('front.blog')}}</a></li>
            <li><a href="contact.html">{{__('front.contact')}}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right hidden-sm">
                @if(Sentinel::getUser())
                    <li><a class="" href="{{ route('profile') }}"><i class="fa fa-user" aria-hidden="true"></i> {{Sentinel::getUser()->first_name}}</a></li>
                @else
                <li><a class="" href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> {{__('front.login')}}</a></li>
                @endif
            <li><a class="" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> {{__('front.cart')}}</a></li>
                <li>
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