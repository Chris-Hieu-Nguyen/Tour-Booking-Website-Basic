@extends('admin.layout.master')
@section('title','Bảng điều khiển')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Tour</h1>
	<a class="btn btn-danger mb-2" href="{{route('tour.create')}}"><i class="fas fa-plus"></i> {{__('label.create_new')}}</a>
	@include('admin.partial.message')
	<!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
				<th>STT</th>
                <th>Name</th>
				<th>Mô Tả</th>
                <th>Số Người</th>
                <th>Ngày Bắt Đầu</th>
                <th>Ngày Kết Thúc</th>
                <th>Tuỳ Chọn</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
				<th>STT</th>
                <th>Name</th>
				<th>Mô Tả</th>
                <th>Số Người</th>
                <th>Ngày Bắt Đầu</th>
                <th>Ngày Kết Thúc</th>
                <th>Tuỳ Chọn</th>
              </tr>
            </tfoot>
            <tbody>
				@php
					$stt =0;
				@endphp
				@foreach ($dataTour as $item)
					<tr>
						<td>{{ ++$stt}}</td>
						<td>{{ $item->translation('vi')->title}}</td>
						<td>{{ $item->translation('vi')->brief}}</td>
						<td>{{($item->max_people == 0) ? '<span class="text-danger">Hết Chỗ</span>' : $item->max_people }}</td>
						<td>{{date('d-m-Y',strtotime($item->start_day))}}</td>
						<td>{{date('d-m-Y',strtotime($item->end_day))}}</td>
						<td>
							<div class="dropdown">
									<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
									  Tuỳ Chọn
									</button>
									<div class="dropdown-menu">
									  <a class="dropdown-item text-warning" href="{{route('tour.edit',[ 'id'=> $item->id])}}"><i class="far fa-edit"></i> Sửa Tour</a>
									  <a class="dropdown-item text-primary" href="{{route('tour.detail',['slug' => $item->slug,'id'=>$item->id])}}"><i class="fas fa-eye"></i> Xem Tour</a>
									  <a  style="cursor:pointer" data_id="{{$item->id}}" title="delete" class="dropdown-item delete text-danger"><i class="fas fa-trash"></i> Xoá Tour</a>
									</div>
							</div>
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
			{!! Form::open(['method' => 'DELETE', 'route'=>['tour.delete'], 'id'=>'frm_delete']) !!}
				<div class="modal-header">
					<h4 class="modal-title">Xóa</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Bạn có muốn xóa bài viết này không!</p>
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