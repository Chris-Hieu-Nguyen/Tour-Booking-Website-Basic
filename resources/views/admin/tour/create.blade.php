@extends('admin.layout.master')
@section('title','Tạo tour mới')
@section('content')
<div class="container-fluid">
	<form action="" method="post" enctype='multipart/form-data'>
		@csrf
		<div class="row">
			<div class="col-9">
				<div class="form-group">
					<label for="">Tiêu Đề</label>
					<input type="text" class="form-control" name="title">
				</div>
				<div class="form-group">
					<label for="">slug</label>
					<input type="text" class="form-control" name="slug">
				</div>
				<div class="form-group">
					<label for="">Tóm Tắt</label>
					<textarea id="" cols="30" rows="10" class="form-control" name="brief"></textarea>
				</div>
				<div class="form-group">
					<label for="">Nội Dung</label>
					<textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
				</div>
			</div>
			<div class="col-3 mt-4">
				<div class="form-group">
					<button class="btn btn-danger form-control">Thêm Bài Viết</button>
				</div>
			</div>
			<input type="hidden" name="Author" value="1" >
		</div>
	</form>
</div>
@endsection