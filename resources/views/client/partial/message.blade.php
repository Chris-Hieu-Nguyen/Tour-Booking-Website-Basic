@if($errors->any())
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
      Đã xảy ra lỗi!
    </div>
@else
    @if (session('err'))
		<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
		{{session('err')}}
		</div>
    @endif
    @if(session('success'))
		<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
		{{session('success')}}
		</div>
    @endif
@endif