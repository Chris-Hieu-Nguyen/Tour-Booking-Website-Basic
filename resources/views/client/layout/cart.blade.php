@extends('client.layout.master')
@section('title',"Cart - Giỏ Hàng")
@section('content')
<section class="header" style="background-image: url(assets/images/header-1920x1135-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h1>Giỏ Hàng</h1>
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
                <div class="hotel-list-content">
                    <div class="row grid-margin">
                        @include('client.partial.message')
                       <table class="table table-bordered table-responsive">
                           <thead class="text-center text-dark" style="background:#fec107;">
                               <th>STT</th>
                               <th>Tour</th>
                               <th>Số Lượng</th>
                               <th>Số Người</th>
                               <th>Khởi Hành</th>
                               <th>Kết Thúc</th>
                               <th>Đơn Giá</th>
                               <th>Xoá</th>
                           </thead>
                           <tbody>
                               <?php $stt=0; ?>
                               @foreach ($dataCart as $item)
                                    <tr class="text-center">
                                        <td>{{++$stt}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->qty}}</td>
                                        <td>{{$item->options->songuoi}}</td>
                                        <td>{{date('d-m-Y',strtotime($item->options->start))}}</td>
                                        <td>{{date('d-m-Y',strtotime($item->options->end))}}</td>
                                        <td>{{number_format($item->price,0)}}<sup>đ</sup></td>
                                        <td><a href="{{route('cart.delete',['id'=>$item->rowId])}}"class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></td>
                                    </tr>
                               @endforeach
                               <tr>
                                    <td colspan="6" style="padding-top:1em;"> <span style="font-weight:bold;">Tổng Tiền: {{Cart::total()}}<sup>đ</sup></span></td>
                                    <td colspan="2" class="text-center"><a href="{{route('cart.delete',['id'=>'all'])}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Xoá Giỏ Hàng</a></td>
                               </tr>
                           </tbody>
                       </table>
                       @if(count(Cart::content())!=0)
                       <form method="post" action="{{route('cart.pay')}}" style="margin-top: 1em;">
                            @csrf
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <label>Email:</label>
                                    <input name="email" type="text" class="form-control" value="{{Sentinel::getUser()->email}}">
                                    {!! $errors->has('email') ? '<p class="text-danger">'.$errors->first('email').'</p>' : '' !!}
                                </div>
                                <div class="col-sm-6">
                                    <label>Số Điện Thoại: </label>
                                    <input type="number" min="0" name="phone" class="form-control" placeholder="Số Điện Thoại">
                                    {!! $errors->has('phone') ? '<p class="text-danger">'.$errors->first('phone').'</p>' : '' !!}
                                </div>
                            </div>
                            <button type="submit" class="thm-btn btn-block">Book now</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection