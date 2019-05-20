@extends('admin.layout.master')
@section('title','Sửa Danh Mục')
@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">Create New Category</h1>
	@include('admin.partial.message')
	{{Form::open(['url' => route('category.store')])}}
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
						<label class="text-dark">Tên Danh Mục</label>
						{{ Form::text('title[vi]',$cate_trans[0]->name,['class' => 'form-control input-border' ])}}
						{!! $errors->has('title.vi') ? '<p class="text-danger">'.$errors->first('title.vi').'</p>' : '' !!}
						{!! $errors->has('title.en') ? '<p class="text-danger">'.$errors->first('title.en').'</p>' : '' !!}
					</div>
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<div class="form-group">
						<label class="text-dark">Category Name</label>
						{{ Form::text('title[en]',$cate_trans[1]->name,['class' => 'form-control input-border' ])}}
					</div>					
				</div>
			</div>
		</div>
		<div class="col-3">
			<div class="form-group">
				<button class="btn bg-blue form-control text-white" style="border-radius:unset;"><i class="fab fa-telegram-plane"></i> &nbsp Thêm Danh Mục</button>
			</div>
		</div>
	</div>
	{{Form::close()}}
</div>
@endsection
@section('css')
<link href="/backend/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
@endsection