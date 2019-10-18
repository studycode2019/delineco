<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function danhsach(){
        return view('BaiViet.danhsach');
    }

    public function chitiet(){
        return view('BaiViet.chitiet');
    }
}
