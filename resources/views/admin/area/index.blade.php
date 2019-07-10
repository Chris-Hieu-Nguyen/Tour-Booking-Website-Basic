@extends('admin.layout.master')
@section('title','Khu Vực')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Khu Vực</h1>
    <a class="btn btn-danger mb-2" href="{{route('area.create')}}"><i class="fas fa-plus"></i> {{__('label.create_new')}}</a>
    @include('admin.partial.message')
    <!-- DataTales Example -->
    <div class="card shadow mb-4 list-category">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>STT</th>
				<th>Tên</th>
				<th>Danh Mục</th>
				<th>Hiển Thị</th>
                <th>Tuỳ Chọn</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>STT</th>
				<th>Tên</th>
				<th>Danh Mục</th>
				<th>Hiển Thị</th>
                <th>Tuỳ Chọn</th>
              </tr>
            </tfoot>
            <tbody>
				@php
					$stt = 0;
				@endphp
				@foreach ($dataArea as $item)
					<tr>
						<td>{{++$stt}}</td>
						<td>{{ $item->area_translation[0]->name}}</td>
						<td>{{ $item->category->translation()->name}}</td>
						@if($item->status !=0)
						<td class="text-success text-center"><i class="fas fa-circle"></i> Hiển Thị</td>
						@else
						<td class="text-danger text-center"><i class="fas fa-circle"></i> Ẩn</td>
						@endif
						<td class="text-center">
							<a href="{{route('area.edit',['id' => $item->id ])}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
							<button class="btn btn-danger delete" data_id="{{$item->id}}"><i class="fas fa-trash"></i></button>
						</td>
					</tr>
				@endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection
@section('modal')
<div id="deleteModal" class="modal fade" role='dialog'>
		<div class="modal-dialog">
			<div class="modal-content">
			{!! Form::open(['method' => 'DELETE', 'route'=>['area.delete'], 'id'=>'frm_delete']) !!}
				<div class="modal-header">
					<h4 class="modal-title">Xóa</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Bạn có muốn xóa danh mục này không!</p>
				</div>
				<div class="modal-footer">
					{!! Form::hidden('id', 0, array('id' => 'delete_id')) !!}
					<button type="submit" class="btn btn-primary">Delete</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			{!! Form::close() !!}
			</div>
		  </div>
		</div>
@endsection
@section('script')
    <!-- Page level plugins -->
    <script src="/backend/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
	<script src="/backend/js/demo/datatables-demo.js"></script>
	<script>
		$('.delete').on('click', function(){
			$('#delete_id').val($(this).attr('data_id'));
			$('#deleteModal').modal();
		});
	</script>
@endsection