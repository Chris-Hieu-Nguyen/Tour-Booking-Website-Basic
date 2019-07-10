@extends('admin.layout.master_editor')
@section('title','Tạo tour mới')
@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">Create New Tour</h1>
	{{Form::open(['url' => route('tour.store')])}}
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
						<label class="text-dark">Tên Tour</label>
						{{ Form::text('title[vi]',null,['class' => 'form-control input-border' ])}}
						{!! $errors->has('title.vi') ? '<p class="text-danger">'.$errors->first('title.vi').'</p>' : '' !!}
					</div>
					<div class="form-group">
						<label class="text-dark">Mô Tả Ngắn</label>
						{{Form::textarea('brief[vi]',null,['class'=>'form-control input-border','rows' => '2', 'cols'=>'30'])}}
						{!! $errors->has('brief.vi') ? '<p class="text-danger">'.$errors->first('brief.vi').'</p>' : '' !!}
					</div>
					<div class="form-group">
						<label class="text-dark">Mô Tả Chi Tiết</label>
						{{ Form::textarea('content[vi]',null,['class'=>'form-control','id'=>'content_vi'])}}
						{!! $errors->has('content.vi') ? '<p class="text-danger">'.$errors->first('content.vi').'</p>' : '' !!}
					</div>
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<div class="form-group">
						<label class="text-dark">Name Tour</label>
						{{ Form::text('title[en]',null,['class' => 'form-control input-border' ])}}
					</div>
					<div class="form-group">
						<label class="text-dark">Short description</label>
						{{Form::textarea('brief[en]',null,['class'=>'form-control input-border','rows' => '5', 'cols'=>'30'])}}
					</div>
					<div class="form-group">
						<label class="text-dark">Description</label>
						{{ Form::textarea('content[en]',null,['class'=>'form-control','id'=>'content_en'])}}
					</div>					
				</div>
			</div>
			<div class="form-row mb-1">
				<div class="col">
				<label class="text-dark" >Địa Điểm</label>
				<select name="destination_id" id="" class="form-control input-border">
						@foreach ($destinations as $item)
							<option value="{{$item->id}}">{{$item->translation('vi')->name}}</option>
						@endforeach
				</select>
				</div>
				<div class="col">
					<label class="text-dark">Giá (người lớn >13t)</label>
					{{Form::number('price',null,['class' => 'form-control input-border'])}}
				</div>
				<div class="col">
					<label class="text-dark">Giá (trẻ em >8t)</label>
					{{Form::number('price_child',null,['class' => 'form-control input-border'])}}
				</div>
			</div>
			<div class="form-row mb-3">
				<div class="col">
					<label class="text-dark"> Khuyến Mãi(%)</label>
					{{Form::number('sale',0,['class' => 'form-control input-border','min' => '0'])}}
				</div>
				<div class="col">
					<label class="text-dark"> Số Người</label>
					{{Form::number('max_people',0,['class' => 'form-control input-border','min' => '0'])}}
				</div>
				<div class="col">
					<label class="text-dark">Bắt đầu</label>
					{{Form::text('start_day',null,['class' => 'form-control input-border','placeholder' => 'mm/dd/yy','id' => 'from'])}}
					{!! $errors->has('start_day') ? '<p class="text-danger">'.$errors->first('end_day').'</p>' : '' !!}
				</div>
				<div class="col">
					<label class="text-dark">Kết thúc</label>
					{{Form::text('end_day',null,['class' => 'form-control input-border','placeholder' => 'mm/dd/yy','id' => 'to'])}}
					{!! $errors->has('end_day') ? '<p class="text-danger">'.$errors->first('end_day').'</p>' : '' !!}
				</div>
			</div>
		</div>
		<div class="col-3">
			<div class="form-group">
				<button class="btn bg-blue form-control text-white" style="border-radius:unset;"><i class="fab fa-telegram-plane"></i> &nbsp Thêm Tour</button>
			</div>
			<div class="form-group">
				<label for="photo" class="">{{__('label.avatar')}}</label>
				{!! Form::hidden('avatar', '', ['id'=>'photo']) !!}
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
@section('script')
	<script>
		var dateToday = new Date();
		var dates = $("#from, #to").datepicker({
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 2,
			minDate: dateToday,
			onSelect: function(selectedDate) {
				var option = this.id == "from" ? "minDate" : "maxDate",
					instance = $(this).data("datepicker"),
					date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
				dates.not(this).datepicker("option", option, date);
			}
		});
	</script>
@endsection