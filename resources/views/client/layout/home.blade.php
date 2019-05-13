@extends('client.layout.master')
@section('title',"Tour Travel - Mạng bán tour hàng đầu tại việt nam")
@section('content')
<div class="slider-wrapper">
    <div class="responisve-container">
        <div class="slider">
            <div class="fs_loader"></div>
            <div class="slide">
                <p class="uc" data-position="150,360" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">Welcome to </p>
                <p class="slider-titele" data-position="210,200" data-in="left"  data-step="2" data-delay="100">Bdtask Travel Agency</p>
                <p class="slider-text" data-position="270,100" data-in="bottom" data-out="right" data-step="2" data-delay="1000">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been<br>
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took  
                </p>
                <a href="#" class="thm-btn" data-position="370,435" data-in="bottom" data-out="right" data-step="2" data-delay="1500">Read More</a>
            </div>
            <div class="slide">
                <p class="uc" data-position="150,360" data-in="top" data-step="1" data-out="top">Welcome to </p>
                <p class="slider-titele" data-position="210,200" data-in="bottom"  data-step="2" data-delay="100">Bdtask Travel Agency</p>
                <p class="slider-text" data-position="270,100" data-in="bottom" data-out="right" data-step="2" data-delay="1000">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been<br>
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took  
                </p>
                <a href="#" class="thm-btn" data-position="370,435" data-in="bottom" data-out="right" data-step="2" data-delay="1500">Read More</a>
            </div>
        </div>
    </div>
</div>
<div class="container boking-inner">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1default" data-toggle="tab"><i class="flaticon-paper-plane"></i>Tour</a></li>
                        <li><a href="#tab2default" data-toggle="tab"> <i class="flaticon-cabin"></i>Hotel</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                            <div class="row">
                                <div class="col-xs-12 col-sm-9 col-md-10">
                                    <div class="row panel-margin">
                                        <div class="col-xs-6 col-sm-3 col-md-3 panel-padding">
                                            <label>Khởi Hành</label>
                                            <div class="icon-addon">
                                                <input type="text" placeholder="Date" class="form-control" id="datepicker1"/>
                                                <label class="glyphicon fa fa-calendar"  title="date"></label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 panel-padding">
                                            <label>Kết Thúc</label>
                                            <div class="icon-addon">
                                                <input type="text" placeholder="Date" class="form-control" id="datepicker2"/>
                                                <label class="glyphicon fa fa-calendar"  title="date"></label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 panel-padding">
                                            <label>Loại Tour</label>
                                            <!-- filters select -->
                                            <div class="select-filters">
                                                <select name="tour" class="tour">
                                                    <option value="" selected>1</option>
                                                    <option value="2">text - 2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 panel-padding">
                                            <label>Địa Danh</label>
                                            <!-- filters select -->
                                            <div class="select-filters">
                                                <select name="person">
                                                    <option value="" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2">
                                    <button type="button" class="thm-btn">Tìm Tour</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2default">
                            <div class="row">
                                <div class="col-xs-12 col-sm-9 col-md-10">
                                    <div class="row panel-margin">
                                        <div class="col-xs-6 col-sm-4 col-md-2 panel-padding">
                                            <label>Arrival</label>
                                            <div class="icon-addon">
                                                <input type="text" placeholder="Date" class="form-control" id="datepicker3"/>
                                                <label class="glyphicon fa fa-calendar"  title="email"></label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-2 panel-padding">
                                            <label>Going</label>
                                            <div class="icon-addon">
                                                <input type="text" placeholder="Date" class="form-control" id="datepicker4"/>
                                                <label class="glyphicon fa fa-calendar"  title="email"></label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-2 hidden-sm panel-padding">
                                            <label>Room</label>
                                            <!-- filters select -->
                                            <div class="select-filters">
                                                <select name="room" id="room2">
                                                    <option value="" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-2 hidden-sm panel-padding">
                                            <label>Person</label>
                                            <!-- filters select -->
                                            <div class="select-filters">
                                                <select name="person" id="person2">
                                                    <option value="" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-2 hidden-sm panel-padding">
                                            <label>Child</label>
                                            <!-- filters select -->
                                            <div class="select-filters">
                                                <select name="child" id="child2">
                                                    <option value="" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-2 panel-padding">
                                            <label>Day</label>
                                            <!-- filters select -->
                                            <div class="select-filters">
                                                <select name="day" id="day2">
                                                    <option value="" selected="">1 days</option>
                                                    <option value="2">2 days</option>
                                                    <option value="3">3 days</option>
                                                    <option value="4">4 days</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2">
                                    <button type="button" class="thm-btn">Search book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- popular tour -->
<section class="popular-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="title">
                        <h2>Tours Đang Hot</h2>
                        <p>Chùm tour đang được mua nhiều nhất</p>
                    </div>
                </div>
            </div>
            <div class="row thm-margin">
                <div id="popular-slide" class="owl-carousel">
                    <div class="item">
                        <div class="grid-item-inner">
                            <div class="grid-img-thumb">
                                <!-- ribbon -->
                                <div class="ribbon"><span>Popular</span></div>
                                <a href="#"><img src="assets/images/tour-370x370-1.jpg" alt="1" class="img-responsive" /></a>
                            </div>
                            <div class="grid-content">
                                <div class="grid-price text-right">
                                    Only <span><sub>$</sub>991</span>
                                </div>
                                <div class="grid-text">
                                    <div class="place-name">City sightseeing</div>
                                    <div class="travel-times">
                                        <h4 class="pull-left">3 days 2 nights </h4>
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
                    <div class="item">
                        <div class="grid-item-inner">
                            <div class="grid-img-thumb">
                                <!-- ribbon -->
                                <div class="ribbon"><span>Popular</span></div>
                                <a href="#"><img src="assets/images/tour-370x370-7.jpg" alt="1" class="img-responsive" /></a>
                            </div>
                            <div class="grid-content">
                                <div class="grid-price text-right">
                                    Only <span><sub>$</sub>785</span>
                                </div>
                                <div class="grid-text">
                                    <div class="place-name">Beach Tour</div>
                                    <div class="travel-times">
                                        <h4 class="pull-left">3 days 2 nights </h4>
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
                    <div class="item">
                        <div class="grid-item-inner">
                            <div class="grid-img-thumb">
                                <!-- ribbon -->
                                <div class="ribbon"><span>Popular</span></div>
                                <a href="#"><img src="assets/images/tour-370x370-8.jpg" alt="1" class="img-responsive" /></a>
                            </div>
                            <div class="grid-content">
                                <div class="grid-price text-right">
                                    Only <span><sub>$</sub>728</span>
                                </div>
                                <div class="grid-text">
                                    <div class="place-name">Mariott Hotel</div>
                                    <div class="travel-times">
                                        <h4 class="pull-left">3 days 2 nights </h4>
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
                    <div class="item">
                        <div class="grid-item-inner">
                            <div class="grid-img-thumb">
                                <!-- ribbon -->
                                <div class="ribbon"><span>Popular</span></div>
                                <a href="#"><img src="assets/images/tour-370x370-9.jpg" alt="1" class="img-responsive" /></a>
                            </div>
                            <div class="grid-content">
                                <div class="grid-price text-right">
                                    Only <span><sub>$</sub>885</span>
                                </div>
                                <div class="grid-text">
                                    <div class="place-name">Adventure Toure</div>
                                    <div class="travel-times">
                                        <h4 class="pull-left">3 days 2 nights </h4>
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
                    <div class="item">
                        <div class="grid-item-inner">
                            <div class="grid-img-thumb">
                                <!-- ribbon -->
                                <div class="ribbon"><span>Popular</span></div>
                                <a href="#"><img src="assets/images/tour-370x370-2.jpg" alt="1" class="img-responsive" /></a>
                            </div>
                            <div class="grid-content">
                                <div class="grid-price text-right">
                                    Only <span><sub>$</sub>789</span>
                                </div>
                                <div class="grid-text">
                                    <div class="place-name">Historic Buildings</div>
                                    <div class="travel-times">
                                        <h4 class="pull-left">3 days 2 nights </h4>
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
                    <p>Với 348 điểm đến thú vị trên toàn thế giới.</p>
                </div>
            </div>
        </div>
        <div class="row thm-margin">
            <div class="col-md-3 col-sm-4 thm-padding">
                <div class="destination-grid">
                    <a href="#"><img src="assets/images/destination-370x370-1.jpg" class="img-responsive" alt=""></a>
                    <div class="mask">
                        <h2>Sydney</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                        <a href="#" class="thm-btn">Read More</a>
                    </div>
                    <div class="dest-name">
                        <h5>Sydney Opera House</h5>
                        <h4>Sydney</h4>
                    </div>
                    <div class="dest-icon">
                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 thm-padding">
                <div class="destination-grid">
                    <a href="#"><img src="assets/images/destination-370x370-2.jpg" class="img-responsive" alt=""></a>
                    <div class="mask">
                        <h2>Brazil</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                        <a href="#" class="thm-btn">Read More</a>
                    </div>
                    <div class="dest-name">
                        <h5>Fernando de Noronha</h5>
                        <h4>Brazil</h4>
                    </div>
                    <div class="dest-icon">
                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 thm-padding">
                <div class="destination-grid">
                    <a href="#"><img src="assets/images/destination-370x370-3.jpg" class="img-responsive" alt=""></a>
                    <div class="mask">
                        <h2>Istanbul</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                        <a href="#" class="thm-btn">Read More</a>
                    </div>
                    <div class="dest-name">
                        <h5>Aya Sofya</h5>
                        <h4>Istanbul</h4>
                    </div>
                    <div class="dest-icon">
                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 thm-padding">
                <div class="destination-grid">
                    <a href="#"><img src="assets/images/destination-370x370-4.jpg" class="img-responsive" alt=""></a>
                    <div class="mask">
                        <h2>India</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                        <a href="#" class="thm-btn">Read More</a>
                    </div>
                    <div class="dest-name">
                        <h5>Taj Mahal</h5>
                        <h4>India</h4>
                    </div>
                    <div class="dest-icon">
                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 thm-padding">
                <div class="destination-grid">
                    <a href="#"><img src="assets/images/destination-370x370-5.jpg" class="img-responsive" alt=""></a>
                    <div class="mask">
                        <h2>Italy</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                        <a href="#" class="thm-btn">Read More</a>
                    </div>
                    <div class="dest-name">
                        <h5>Canals of Venice</h5>
                        <h4>Italy</h4>
                    </div>
                    <div class="dest-icon">
                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 thm-padding">
                <div class="destination-grid">
                    <a href="#"><img src="assets/images/destination-370x370-6.jpg" class="img-responsive" alt=""></a>
                    <div class="mask">
                        <h2>Paris</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                        <a href="#" class="thm-btn">Read More</a>
                    </div>
                    <div class="dest-name">
                        <h5>Eiffel Tower</h5>
                        <h4>Paris</h4>
                    </div>
                    <div class="dest-icon">
                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 hidden-sm thm-padding">
                <div class="destination-grid">
                    <a href="#"><img src="assets/images/destination-370x370-7.jpg" class="img-responsive" alt=""></a>
                    <div class="mask">
                        <h2>London</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                        <a href="#" class="thm-btn">Read More</a>
                    </div>
                    <div class="dest-name">
                        <h5>Hop on Hop off Bus Tour</h5>
                        <h4>London</h4>
                    </div>
                    <div class="dest-icon">
                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 hidden-sm thm-padding">
                <div class="destination-grid">
                    <a href="#"><img src="assets/images/destination-370x370-8.jpg" class="img-responsive" alt=""></a>
                    <div class="mask">
                        <h2>London</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                        <a href="#" class="thm-btn">Read More</a>
                    </div>
                    <div class="dest-name">
                        <h5>Hop on Hop off Bus Tour</h5>
                        <h4>London</h4>
                    </div>
                    <div class="dest-icon">
                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                    </div>
                </div>
            </div>
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
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="package-wiget">
                    <div class="grid">
                        <figure class="effect-milo">
                            <img src="assets/images/Package-800x500-1.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="effect-block">
                                    <h3>Hilton Molino Stucky</h3>
                                    <div class="package-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button type="button" class="thm-btn">Explore Now</button>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="package-content">
                        <h5>Hilton Molino Stucky</h5>
                        <div class="package-price">from
                            <span class="price">
                                <span class="amount">$200.00</span>
                            </span>
                            /night
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="package-wiget">
                    <div class="grid">
                        <figure class="effect-milo">
                            <img src="assets/images/Package-800x500-2.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="effect-block">
                                    <h3>Palolem, India</h3>
                                    <div class="package-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button type="button" class="thm-btn">Explore Now</button>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="package-content">
                        <h5>Palolem, India</h5>
                        <div class="package-price">from
                            <span class="price">
                                <span class="amount">$150.00</span>
                            </span>
                            /night
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="package-wiget">
                    <div class="grid">
                        <figure class="effect-milo">
                            <div class="ribbon"><span>Popular</span></div>
                            <img src="assets/images/Package-800x500-3.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="effect-block">
                                    <h3>IEiffel Tower, Paris</h3>
                                    <div class="package-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button type="button" class="thm-btn">Explore Now</button>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="package-content">
                        <h5>IEiffel Tower, Paris</h5>
                        <div class="package-price">from
                            <span class="price">
                                <span class="amount">$290.00</span>
                            </span>
                            /night
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="package-wiget">
                    <div class="grid">
                        <figure class="effect-milo">
                            <img src="assets/images/Package-800x500-4.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="effect-block">
                                    <h3>Canals of Venice, Italy</h3>
                                    <div class="package-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button type="button" class="thm-btn">Explore Now</button>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="package-content">
                        <h5>Canals of Venice, Italy</h5>
                        <div class="package-price">from
                            <span class="price">
                                <span class="amount">$189.00</span>
                            </span>
                            /night
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="package-wiget">
                    <div class="grid">
                        <figure class="effect-milo">
                            <img src="assets/images/Package-800x500-5.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="effect-block">
                                    <h3>Itali, Pisa</h3>
                                    <div class="package-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button type="button" class="thm-btn">Explore Now</button>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="package-content">
                        <h5>Itali, Pisa</h5>
                        <div class="package-price">from
                            <span class="price">
                                <span class="amount">$139.00</span>
                            </span>
                            /night
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="package-wiget">
                    <div class="grid">
                        <figure class="effect-milo">
                            <div class="ribbon"><span>New</span></div>
                            <img src="assets/images/Package-800x500-6.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="effect-block">
                                    <h3>St Paul's Cathedral, London</h3>
                                    <div class="package-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button type="button" class="thm-btn">Explore Now</button>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="package-content">
                        <h5>St Paul's Cathedral, London</h5>
                        <div class="package-price">from
                            <span class="price">
                                <span class="amount">$180.00</span>
                            </span>
                            /night
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
                <div class="package-wiget">
                    <div class="grid">
                        <figure class="effect-milo">
                            <img src="assets/images/Package-800x500-7.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="effect-block">
                                    <h3>Castel Sant'Angelo. Rome</h3>
                                    <div class="package-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button type="button" class="thm-btn">Explore Now</button>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="package-content">
                        <h5>Castel Sant'Angelo. Rome</h5>
                        <div class="package-price">from
                            <span class="price">
                                <span class="amount">$170.00</span>
                            </span>
                            /night
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
                <div class="package-wiget">
                    <div class="grid">
                        <figure class="effect-milo">
                            <img src="assets/images/Package-800x500-8.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="effect-block">
                                    <h3>Giza Necropolis, Egypt</h3>
                                    <div class="package-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <button type="button" class="thm-btn">Explore Now</button>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="package-content">
                        <h5>Giza Necropolis, Egypt</h5>
                        <div class="package-price">from
                            <span class="price">
                                <span class="amount">$200.00</span>
                            </span>
                            /night
                        </div>
                    </div>
                </div>
            </div>
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
                    <h2>Latest Blog</h2>
                    <p>Checkout our Latest Blogs and News</p>
                </div>
            </div>
        </div>
        <div class="row thm-margin">
            <div id="blog-slide" class="owl-carousel">
                <!-- blog post item -->
                <div class="item">
                    <div class="blog-content">
                        <div class="blog-img image-hover">
                            <a href="#"><img src="assets/images/blog-800x250-1.jpg" class="img-responsive" alt=""></a>
                            <span class="post-date">14 November 2016</span>
                        </div>
                        <h4><a href="#">It is a long established fact that</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <!-- blog post item -->
                <div class="item">
                    <div class="blog-content">
                        <div class="blog-img image-hover">
                            <a href="#"><img src="assets/images/blog-800x250-2.jpg" class="img-responsive" alt=""></a>
                            <span class="post-date">14 November 2016</span>
                        </div>
                        <h4><a href="#">It is a long established fact that</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <!-- blog post item -->
                <div class="item">
                    <div class="blog-content">
                        <div class="blog-img image-hover">
                            <a href="#"><img src="assets/images/blog-800x250-3.jpg" class="img-responsive" alt=""></a>
                            <span class="post-date">14 November 2016</span>
                        </div>
                        <h4><a href="#">It is a long established fact that</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <!-- blog post item -->
                <div class="item">
                    <div class="blog-content">
                        <div class="blog-img image-hover">
                            <a href="#"><img src="assets/images/blog-800x250-4.jpg" class="img-responsive" alt=""></a>
                            <span class="post-date">14 November 2016</span>
                        </div>
                        <h4><a href="#">It is a long established fact that</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <!-- blog post item -->
                <div class="item">
                    <div class="blog-content">
                        <div class="blog-img image-hover">
                            <a href="#"><img src="assets/images/blog-800x250-5.jpg" class="img-responsive" alt=""></a>
                            <span class="post-date">14 November 2016</span>
                        </div>
                        <h4><a href="#">It is a long established fact that</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
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
@section('script')
<script>
        $('.tour').on('change', function () {
            var valueSelected = $(this).find("option:selected").val();
            var text = $(this).find("option:selected").text();
            alert(text)
        });
</script>
@endsection