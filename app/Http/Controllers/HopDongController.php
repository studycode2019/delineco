<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HopDongController extends Controller
{
    public function themhopdong(){
        return view('HopDong.ThemHopDong');
    }

    public function danhsachhopdong(){
        $DanhSachHopDong = DB::table('hopdong')->get();

        return view('HopDong.DanhSachHopDong', ['DanhSachHopDong' => $DanhSachHopDong]);
    }

}
