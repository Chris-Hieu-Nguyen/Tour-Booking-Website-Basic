@extends('admin.layout.master')
@section('title','Chi Tiết Hoá Đơn')
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
				<th>Mã Hoá Đơn</th>
				<th>Tên Tour</th>
				<th>Giá Tour</th>
				<th>Số Người</th>
				<th>Thành Tiền</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>STT</th>
				<th>Mã Hoá Đơn</th>
				<th>Tên Tour</th>
				<th>Giá Tour</th>
				<th>Số Người</th>
				<th>Thành Tiền</th>
              </tr>
            </tfoot>
            <tbody>
				@php
					$stt = 0;
				@endphp
				@foreach ($billDetail as $item)
					<tr class="text-center">
						<td>{{++$stt}}</td>
						<td>{{$item->bill->id}}</td>
						<td>{{$item->tour->translation('vi')->title}}</td>
						<td>{{number_format($item->tour->price,0)}}<sup>đ</sup></td>
						<td>{{$item->people}}</td>
						<td>{{number_format($item->price,0)}}<sup>đ</sup></td>
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