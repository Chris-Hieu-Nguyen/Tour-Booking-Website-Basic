@extends('admin.layout.master')
@section('title','Danh Mục')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Người dùng</h1>
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
                <th>Tuỳ Chọn</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Tuỳ Chọn</th>
              </tr>
            </tfoot>
            <tbody>
				<?php $stt=0; ?>
                @foreach ($dataUser as $us)
                    <tr class="text-center">
                        <td>{{++$stt}}</td>
                        <td>{{$us->first_name.' '.$us->last_name}}</td>
                        <td class="text-center">
							@if($us->inRole('admin'))
								<span class="text-danger">Quản Trị</span>
							@else
								<span class="text-primary">Thành Viên</span>
							@endif
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