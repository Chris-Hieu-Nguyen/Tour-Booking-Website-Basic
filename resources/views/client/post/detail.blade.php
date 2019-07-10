@extends('client.layout.master')
@section('title',$post->title)
@section('content')
<section class="header header-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1>{{$post->title}}</h1>
                            <p>{{$post->brief}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="blog-details-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <!-- blog post -->
                    <div class="blog-post">
                        <img src="{{$post->photo}}" class="img-responsive" alt="img">
                        <div class="blog-post-inner img-responsive-fix" style="width:100%;">
                            <div class="content-post">
                                {!! $post->content!!}
                            </div>
                        </div>
                    </div>
                    <div class="btn-inner">
                        <div class="social blog-social hidden-xs">
                            <ul>
                                <li><span>Share :</span></li>
                                <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-lg fa-vimeo-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-lg fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-lg fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Comment -->
                    <div class="comments-container">
                        <h2>Bình luận({{count($dataComment)}})</h2>
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
                    <div class="separator"></div>
                    <!-- Comment Form -->
                    <form method="post" action="{{route('comment.post',['id' => $post->id])}}">
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
                <!-- sideber -->
                <div class="col-md-3 col-sm-4">
                    <!-- popular post -->
                    <div class="sidber-box popular-post-widget">
                        <div class="cats-title">Bài Viết Khác </div>
                        <div class="popular-post-inner">
                            <ul>
                                @foreach ($dataPost as $item)
                            <li><a href="{{route('post.detail',['slug'=>$item->slug,'id'=>$item->id])}}">{{$item->title}}</a>{{date('d-m-Y',strtotime($item->created_at))}}</li>
                                @endforeach
                            </ul>
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