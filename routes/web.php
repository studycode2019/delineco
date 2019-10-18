<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('trangchu', function(){
    return view('TrangChu');
});


// Quản lý thông tin KHÁCH HÀNG
Route::prefix('home')->group(function () {
    Route::get('danhsachkhachhang', 'KhachHangController@DanhSachKhachHang');

    // Thêm khách hàng vào danh sách
    Route::get('themkhachhang', 'KhachHangController@ThemKhachHang');
    Route::post('postthemkhachhang', 'KhachHangController@postThemKhachHang');

    // Xem thông tin KHÁCH HÀNG theo id
    Route::get('thongtinkhachhang/{id}', 'KhachHangController@ThongTinKhachHang');

    // Sửa thông tin KHÁCH HÀNG theo id
    Route::get('Sua/{id}', 'KhachHangController@suaThongTinKhachHang');
    Route::post('capNhatThongTinKhachHang/{id}', 'KhachHangController@capNhatThongTinKhachHang');

    // Xóa thông tin KHÁCH HÀNG theo id
    Route::get('Xoa/{id}', 'KhachHangController@Xoa');
});



// Quản lý thông tin NHAN VIÊN
Route::prefix('home')->group(function () {
    Route::get('danhsachnhanvien', 'NhanVienController@DanhSachNhanVien');

    // Thêm khách hàng vào danh sách
    Route::get('themnhanvien', 'NhanVienController@ThemNhanVien');
    Route::post('postthemnhanvien', 'NhanVienController@postThemNhanVien');

    // Xem thông tin KHÁCH HÀNG theo id
    Route::get('thongtinnhanvien/{id}', 'NhanVienController@ThongTinNhanVien');

    // Sửa thông tin KHÁCH HÀNG theo id
    Route::get('SuaNV/{id}', 'NhanVienController@suaThongTinNhanVien');
    Route::post('capNhatThongTinNhanVien/{id}', 'NhanVienController@capNhatThongTinNhanVien');

    // Xóa thông tin KHÁCH HÀNG theo id
    Route::get('XoaNV/{id}', 'NhanVienController@Xoa');
});

// Quản lý HỢP ĐỒNG
Route::prefix('home')->group(function () {
    Route::get('themhopdong', 'HopDongController@themhopdong');

    Route::get('danhsachhopdong', 'HopDongController@danhsachhopdong');
});
