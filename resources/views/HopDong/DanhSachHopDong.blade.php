@extends('layouts.master')

@section('title', 'Sàn giao dịch | BDS')

@section('name', 'danhsachkhachhang')

@section('content')

<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col">
              <h3 class="card-title">
                <h3 class="text-uppercase">Danh sách khách hàng</h3>
              </h3>
            </div>
            <div class="col">
              <div class="text-right">
                <a class="btn btn-primary" href="/home/themhopdong">
                  <i class="fas fa-folder"></i>
                  Thêm Hợp Đồng
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr class="text-center">
                <th>ID</th>
                <th>Họ và Tên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa Chỉ</th>
                <th>Chức Năng</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($DanhSachHopDong as $TungHopDong)
                <tr>
                  <td class="text-center">{{$TungHopDong->id}}</td>
                  <td class="text-uppercase">{{$TungHopDong->hoTen}}</td>
                  <td>{{$TungHopDong->soDienThoai}}</td>
                  <td>{{$TungHopDong->email}}</td>
                  <td>{{$TungHopDong->diaChi}}</td>
                  <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="thongtinhopdong/{{ $TungHopDong->id}}">
                        <i class="fas fa-folder">
                        </i>
                        Xem
                    </a>
                    <a class="btn btn-info btn-sm" href="Sua/{{$TungHopDong->id}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Sửa
                    </a>
                    <a class="btn btn-danger btn-sm" href="Xoa/{{$TungHopDong->id}}">
                        <i class="fas fa-trash">
                        </i>
                        Xóa
                    </a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection
