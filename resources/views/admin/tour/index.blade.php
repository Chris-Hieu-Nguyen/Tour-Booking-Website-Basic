@extends('admin.layout.master')
@section('title','Bảng điều khiển')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Tour</h1>
	<a class="btn btn-danger mb-2" href="{{route('tour.create')}}"><i class="fas fa-plus"></i> {{__('label.create_new')}}</a>
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
				<th>Ảnh</th>
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
				<th>Ảnh</th>
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
						<td>
							<img src="{{$item->avatar}}" width="100" height="100" alt="">
						</td>
						<td>{{$item->max_people}}</td>
						<td>{{$item->start_day}}</td>
						<td>{{$item->end_day}}</td>
						<td>
							<a title="edit" class="btn btn-warning text-white" href="{{route('tour.edit',[ 'id'=> $item->id])}}"><i class="far fa-edit"></i></a> &nbsp;
							<a title="delete" class="btn btn-danger text-white"><i class="fas fa-trash"></i></a> &nbsp;
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
@section('script')
    <!-- Page level plugins -->
    <script src="/backend/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
	<script src="/backend/js/demo/datatables-demo.js"></script>
@endsection