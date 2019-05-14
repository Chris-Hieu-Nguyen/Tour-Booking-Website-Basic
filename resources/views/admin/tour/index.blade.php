@extends('admin.layout.master')
@section('title','Bảng điều khiển')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Tour</h1>
    

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
                <th>Name</th>
                <th>Mô Tả</th>
                <th>Số Người</th>
                <th>Ngày Bắt Đầu</th>
                <th>Ngày Kết Thúc</th>
                <th>Tuỳ Chọn</th>
              </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Du lịch Hạ Long</td>
                    <td>đi chơi Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                    <td>100</td>
                    <td>Ngày Bắt Đầu</td>
                    <td>Ngày Kết Thúc</td>
                    <td>
                       <!-- Example single danger button -->
                        <div class="btn-group">
                                <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tuỳ Chọn
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Chi Tiết</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-edit"> </i> Sửa</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Xoá</a>
                        </div>
                    </td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection
@section('script')
    <!-- Page level plugins -->
    <script src="/admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/admin/js/demo/datatables-demo.js"></script>
@endsection