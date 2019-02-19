<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;

class TheloaiController extends Controller
{
    public function getdanhsach(){
    	$theloai = TheLoai::all();
    	return view('admin.theloai.danhsach',['theloai'=>$theloai]);
    }
   public function getthem(){
   	$theloai = TheLoai::all();
   	return view('admin.theloai.them');
   }
   public function postthem(Request $request){
   	$theloai = new TheLoai;
    $this->validate($request,[
            'tentheloai'=>'required|min:3|max:100',
        ],
        [
            'tentheloai.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'tentheloai.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tentheloai.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
   	$theloai->tentheloai = $request->tentheloai;
   	$theloai->save();
   	return redirect('admin/theloai/danhsach')->with('thongbao',' Thêm thành công');
   }
   public function getsua($id){
   	$theloai = TheLoai::find($id);
   	return view('admin.theloai.sua',['theloai'=>$theloai]);

   }
   public function postsua(Request $request , $id){
   	$theloai = TheLoai::find($id);
   	$theloai->tentheloai = $request->tentheloai;
   	$theloai->save();
   	return redirect('admin/theloai/danhsach')->with('thongbao',' Sửa thành công');
   }
   public function getxoa($id){
    $theloai = TheLoai::find($id);
    $theloai->delete();
    return redirect('admin/theloai/danhsach')->with('thongbao',' Xóa thành công');
   }
}
