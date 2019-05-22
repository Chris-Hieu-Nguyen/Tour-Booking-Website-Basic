@extends('admin.layout.master')
@section('title','Sửa khu vực')
@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">Edit Area</h1>
	@include('admin.partial.message')
	{{Form::open(['url' => route('area.update',['id' => $area->id])])}}
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
                        <label class="text-dark">Tên Khu Vực</label>
                        {{ Form::text('title[vi]',$area_trans[0]->name,['class' => 'form-control input-border' ])}}
                        {!! $errors->has('title.vi') ? '<p class="text-danger">'.$errors->first('title.vi').'</p>' : '' !!}
                        {!! $errors->has('title.en') ? '<p class="text-danger">'.$errors->first('title.en').'</p>' : '' !!}
					</div>
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<div class="form-group">
                        <label class="text-dark">Area Name</label>
                        {{ Form::text('title[en]',$area_trans[1]->name,['class' => 'form-control input-border' ])}}
					</div>					
				</div>
            </div>
            <div class="form-group">
                <label class="text-dark" >Danh Mục</label>
                <select name="category_id" class="form-control input-border" id="cate_vi">
                 @foreach ($category as $item)
                     @if ($item->id == $area->category_id)
                         <option value="{{ $item->id }}" selected>{{$item->translation('vi')->name}}</option> 
                     @else
                         <option value="{{ $item->id }}" >{{$item->translation('vi')->name}}</option> 
                     @endif
                 @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="" class="text-dark">Hiển Thị</label>
                <select name="status" id="" class="form-control input-border">
                    @if ($area->status!=0)
                        <option value="1" selected>Hiển Thị</option>
                        <option value="0">Ẩn</option>
                    @else
                        <option value="1">Hiển Thị</option>
                        <option value="0" selected>Ẩn</option>
                    @endif
                </select>
            </div>
		</div>
		<div class="col-3">
			<div class="form-group">
				<button class="btn bg-blue form-control text-white" style="border-radius:unset;"><i class="fab fa-telegram-plane"></i> &nbsp Sửa Khu Vực</button>
            </div>
            <div class="form-group {{ ($errors->has('photo')) ? 'has-error' : '' }}">
				<label for="photo" class="">{{__('label.avatar')}}</label>
				{!! Form::hidden('photo', '', ['id'=>'photo']) !!}
				<a href="javascript:openCustomRoxy()"><img src="{{old('photo','/img/no-photo.png')}}" id="customRoxyImage" style="max-width:250px;"></a>
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
@section('script')
    <script>
        $('#cate_vi').on('change', function () {
            var idSelected = $(this).find("option:selected").val();
            $("#cate_en option[value="+idSelected+"]").attr('selected', 'selected');
        });
        $('#cate_en').on('change', function () {
            var idSelected = $(this).find("option:selected").val();
            $("#cate_vi option[value="+idSelected+"]").attr('selected', 'selected');
        });
    </script>
@endsection