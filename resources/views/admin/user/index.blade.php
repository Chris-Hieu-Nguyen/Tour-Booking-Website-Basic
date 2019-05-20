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
                @foreach ($dataUser as $us)
                    <tr>
                        <td>1</td>
                        <td>{{$us->first_name.' '.$us->last_name}}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" title="sửa" href=""><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" title="xoá" href=""><i class="fas fa-trash"></i></a>
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