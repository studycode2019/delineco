@extends('layouts.master')

@section('title', 'Sàn giao dịch | BDS')

@section('name', 'danhsachnhanvien')

@section('content')

<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col">
              <h3 class="card-title">
                <h3 class="text-uppercase">Danh sách nhân viên</h3>
              </h3>
            </div>
            <div class="col">
              <div class="text-right">
                <a class="btn btn-primary" href="/home/themnhanvien">
                  <i class="fas fa-folder"></i>
                  Thêm Nhân Viên
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
                @foreach ($DanhSachNhanVien as $TungNhanVien)
                <tr>
                  <td class="text-center">{{$TungNhanVien->id}}</td>
                  <td class="text-uppercase">{{$TungNhanVien->hoTen}}</td>
                  <td>{{$TungNhanVien->soDienThoai}}</td>
                  <td>{{$TungNhanVien->email}}</td>
                  <td>{{$TungNhanVien->diaChi}}</td>
                  <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="/home/Xem/{{$TungNhanVien->id}}">
                        <i class="fas fa-folder">
                        </i>
                        Xem
                    </a>
                    <a class="btn btn-info btn-sm" href="/home/Sua/{{$TungNhanVien->id}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Sửa
                    </a>
                    <a class="btn btn-danger btn-sm" href="/home/Xoa/{{$TungNhanVien->id}}">
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

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
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
