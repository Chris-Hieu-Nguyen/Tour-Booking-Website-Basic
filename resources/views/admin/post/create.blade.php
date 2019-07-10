@extends('admin.layout.master_editor')
@section('title','Tạo bài viết mới')
@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">Create New Post</h1>
	{{Form::open(['url' => route('post.store')])}}
	<div class="row">
		<div class="col-9">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="form-group">
                        <label class="text-dark">Tiêu Đề</label>
                        {{ Form::text('title',null,['class' => 'form-control input-border' ])}}
                        {!! $errors->has('title') ? '<p class="text-danger">'.$errors->first('title').'</p>' : '' !!}
                    </div>
                    <div class="form-group">
                        <label class="text-dark">Tóm Tắt</label>
                        {{Form::textarea('brief',null,['class'=>'form-control input-border','rows' => '2', 'cols'=>'30'])}}
                        {!! $errors->has('brief') ? '<p class="text-danger">'.$errors->first('brief').'</p>' : '' !!}
                    </div>
                    <div class="form-group">
                        <label class="text-dark">Mô Tả Chi Tiết</label>
                        {{ Form::textarea('content',null,['class'=>'form-control','id'=>'content_vi'])}}
                        {!! $errors->has('content') ? '<p class="text-danger">'.$errors->first('content').'</p>' : '' !!}
                    </div>
                </div>
		</div>
		<div class="col-3 mt-2">
            <label for="">Pushlish</label>
			<div class="form-group">
				<button class="btn bg-blue form-control text-white" style="border-radius:unset;"><i class="fab fa-telegram-plane"></i> &nbsp Thêm Bài Viết</button>
			</div>
			<div class="form-group">
				<label for="photo" class="">{{__('label.avatar')}}</label>
				{!! Form::hidden('photo', '', ['id'=>'photo']) !!}
				<a href="javascript:openCustomRoxy()"><img src='/img/no-photo.png' id="customRoxyImage" style="max-width:250px;"></a>
				<div id="roxyCustomPanel" style="display: none;">
					<iframe src="/backend/fileman/index.html?integration=custom" style="width:100%;height:100%" frameborder="0"></iframe>
				</div>
			</div>
		</div>
	</div>
	{{Form::close()}}
</div>
@endsection
@section('css')
<link href="/backend/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
@endsection