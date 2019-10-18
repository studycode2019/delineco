<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NhanVienController extends Controller
{
    public function themnhanvien(){
        return view('NhanVien.ThemNhanVien');
    }

    public function postThemNhanVien(Request $request ){
        // THÔNG TIN NHÂN VIÊN
        $hoTen = $request->input('hoTen');
        $soDienThoai = $request->input('soDienThoai');
        $email = $request->input('email');
        $diaChi = $request->input('diaChi');
        $data = array('hoTen'=>$hoTen, 'soDienThoai'=>$soDienThoai, 'email'=>$email, 'diaChi'=>$diaChi);
        DB::table('nhanvien')->insert($data);
        return redirect('/home/danhsachnhanvien')->with('success', 'Nhân viên đã thêm vào danh sách.');
    }

    public function DanhSachNhanVien(){
        $DanhSachNhanVien = DB::table('nhanvien')->get();

        return view('NhanVien.DanhSachNhanVien', ['DanhSachNhanVien' => $DanhSachNhanVien]);
    }

    public function Xoa($id){
        DB::table('nhanvien')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function ThongTinNhanVien($id){
        $DanhSachNhanVien = DB::select('select * from nhanvien where id = ?',[$id]);
        return view('NhanVien.ThongTinNhanVien', ['DanhSachNhanVien' => $DanhSachNhanVien]);
    }


    public function suaThongTinNhanVien($id){
        $DanhSachNhanVien = DB::select('select * from nhanvien where id = ?',[$id]);
        return view('NhanVien.SuaThongTinNhanVien', ['DanhSachNhanVien' => $DanhSachNhanVien]);
    }

    public function capNhatThongTinNhanVien(Request $request, $id){
        $hoTen = $request->input('hoTen');
        $gioiTinh = $request->input('gioiTinh');
        $CMND = $request->input('CMND');
        $soDienThoai = $request->input('soDienThoai');
        $email = $request->input('email');
        $diaChi = $request->input('diaChi');
            DB::table('nhanvien')
                ->where('id', $id)
                ->update(['hoTen'=>$hoTen, 'gioiTinh'=>$gioiTinh, 'CMND'=>$CMND, 'soDienThoai'=>$soDienThoai, 'email'=>$email, 'diaChi'=>$diaChi]);
            return back();
    }
}
