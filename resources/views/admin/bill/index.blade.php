@extends('admin.layout.master')
@section('title','Hoá Đơn')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Mục</h1>
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
				<th>Tên Khách Hàng</th>
				<th>Số Điện Thoại</th>
				<th>Email</th>
				<th>Tổng Tiền</th>
				<th>Trạng Thái</th>
                <th>View Detail</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>STT</th>
				<th>Tên Khách Hàng</th>
				<th>Số Điện Thoại</th>
				<th>Email</th>
				<th>Tổng Tiền</th>
				<th>Trạng Thái</th>
                <th>View Detail</th>
              </tr>
            </tfoot>
            <tbody>
				@php
					$stt = 0;
				@endphp
				@foreach ($dataBill as $item)
					<tr>
                        <td>{{++$stt}}</td>
						<td>{{$item->user->first_name.' '.$item->user->last_name}}</td>
						<td>{{$item->phone}}</td>
						<td>{{$item->email}}</td>
						<td class="text-center">{{number_format($item->total),0}}<sup>đ</sup></td>
						@if($item->status !=0)
							<td class="text-success">Đã xác Nhận</td>
						@else
							<td class="text-danger text-center">
									Chưa Duyệt
									<a href="{{route('bill.status',['id'=>$item->id])}}" class="btn btn-success"><i class="fas fa-check"></i></i></a>
							</td>
						@endif
						<td class="text-center">
							<a href="{{route('bill.detail',['id'=>$item->id])}}" title="xem chi tiết" class="btn btn-primary"><i class="fas fa-eye"></i></a>
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