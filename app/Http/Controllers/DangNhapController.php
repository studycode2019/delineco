<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DangNhapController extends Controller
{
    public function getDangNhap(){
        return view('DangNhap');
    }

    
}
