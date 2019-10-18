<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DangKyController extends Controller
{
    public function getDangKy(){
        return view('dangky');
    }

    public function postDangKy(Request $request){
        
    }
}
