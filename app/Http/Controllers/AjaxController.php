<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\LoaiSanPham;

class AjaxController extends Controller
{
       
     public function getloaisanpham(Request $request){
     	$msg = '';

    	$loaisanpham = LoaiSanPham::where('id_theloai',$request->id_theloai)->get();

    	foreach($loaisanpham as $ls)
    	{
    		$msg = $msg.'<option value="'.$ls->id.'"">'.$ls->tenloaisanpham.'</option>';
    	}
    	return $msg;
    }
}