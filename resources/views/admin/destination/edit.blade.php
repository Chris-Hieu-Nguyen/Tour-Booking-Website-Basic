@extends('admin.layout.master_editor')
@section('title','Tạo Điểm Đến Mới')
@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">Create New Destination</h1>
	@include('admin.partial.message')
	{{Form::open(['url' => route('destination.update',['id'=>$destination->id])])}}
	<div class="row">
		<div class="col-9">
			<nav>
				<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
				<a class="nav-item nav-link active hihi" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">{{config('app.locales.vi')}}</a>
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">{{config('app.locales.en')}}</a>
				</div>
			</nav>
			<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<div class="form-group">
                        <label class="text-dark">Tên Địa Điểm</label>
                        {{ Form::text('title[vi]',$destination->translation('vi')->name,['class' => 'form-control input-border' ])}}
                        {!! $errors->has('title.vi') ? '<p class="text-danger">'.$errors->first('title.vi').'</p>' : '' !!}
                        {!! $errors->has('title.en') ? '<p class="text-danger">'.$errors->first('title.en').'</p>' : '' !!}
					</div>
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<div class="form-group">
                            <label class="text-dark">Destination Name</label>
                            {{ Form::text('title[en]',$destination->translation('en')->name,['class' => 'form-control input-border' ])}}
					</div>					
				</div>
            </div>
            <div class="form-group">
                <label class="text-dark" >Khu Vực</label>
                <select name="area_id" class="form-control input-border">
                    @foreach ($area as $item)
                        @if($item->id==$destination->area_id)
							<option value="{{ $item->id }}" selected>{{$item->translation('vi')->name}}</option>
						@else
							<option value="{{ $item->id }}">{{$item->translation('vi')->name}}</option>
						@endif
                    @endforeach
                </select>
            </div>
		</div>
		<div class="col-3">
			<div class="form-group">
				<button class="btn bg-blue form-control text-white" style="border-radius:unset;"><i class="fab fa-telegram-plane"></i> &nbsp Sửa Điểm Đến</button>
            </div>
            <div class="form-group {{ ($errors->has('photo')) ? 'has-error' : '' }}">
				<label for="photo" class="">{{__('label.avatar')}}</label>
				{!! Form::hidden('photo', '', ['id'=>'photo']) !!}
                <a href="javascript:openCustomRoxy()"><img src="{{$destination->photo ? $destination->photo : '/img/no-photo.png' }}" id="customRoxyImage" style="max-width:250px;"></a>
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