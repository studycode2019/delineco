<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KhachHangController extends Controller
{
    public function themkhachhang(){
        return view('KhachHang.ThemKhachHang');
    }

    public function postThemKhachHang(Request $request ){
        // THÔNG TIN KHÁCH HÀNG
        $hoTen = $request->input('hoTen');
        $gioiTinh = $request->input('gioiTinh');
        $CMND = $request->input('CMND');
        $soDienThoai = $request->input('soDienThoai');
        $email = $request->input('email');
        $diaChi = $request->input('diaChi');
        $data = array('hoTen'=>$hoTen, 'gioiTinh'=>$gioiTinh, 'CMND'=>$CMND, 'soDienThoai'=>$soDienThoai, 'email'=>$email, 'diaChi'=>$diaChi);
        DB::table('khachhang')->insert($data);
        return redirect('/home/danhsachkhachhang')->with('success', 'Khách hàng đã được thêm vào danh sách.');
    }

    public function DanhSachKhachHang(){
        $DanhSachKhachHang = DB::table('khachhang')->get();

        return view('KhachHang.DanhSachKhachHang', ['DanhSachKhachHang' => $DanhSachKhachHang]);
    }

    public function Xoa($id){
        DB::table('khachhang')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function ThongTinKhachHang($id){
        $DanhSachKhachHang = DB::select('select * from khachhang where id = ?',[$id]);
        return view('KhachHang.ThongTinKhachHang', ['DanhSachKhachHang' => $DanhSachKhachHang]);
    }


    public function suaThongTinKhachHang($id){
        $DanhSachKhachHang = DB::select('select * from khachhang where id = ?',[$id]);
        return view('KhachHang.SuaThongTinKhachHang', ['DanhSachKhachHang' => $DanhSachKhachHang]);
    }

    public function capNhatThongTinKhachHang(Request $request, $id){
        $hoTen = $request->input('hoTen');
        $gioiTinh = $request->input('gioiTinh');
        $CMND = $request->input('CMND');
        $soDienThoai = $request->input('soDienThoai');
        $email = $request->input('email');
        $diaChi = $request->input('diaChi');
            DB::table('khachhang')
                ->where('id', $id)
                ->update(['hoTen'=>$hoTen, 'gioiTinh'=>$gioiTinh, 'CMND'=>$CMND, 'soDienThoai'=>$soDienThoai, 'email'=>$email, 'diaChi'=>$diaChi]);
            return back();
    }
}
