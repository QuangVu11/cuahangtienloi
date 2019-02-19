<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\LoaiSanPham;

class LoaiSanPhamController extends Controller
{
    public function getdanhsach(){
    	$theloai = TheLoai::all();
    	$loaisanpham = LoaiSanPham::all();
    	return view('admin.loaisanpham.danhsach',['loaisanpham'=>$loaisanpham,'theloai'=>$theloai]);
    }
    public function getthem(){
    	$theloai= TheLoai::all();
    	return view('admin.loaisanpham.them',['theloai'=>$theloai]);
    }
    public function postthem(Request $request){
    	$loaisanpham = new LoaiSanPham;
          $this->validate($request,[
            'tenloaisanpham'=>'required|min:3|max:100',
            
        ],
        [
            'tenloaisanpham.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'tenloaisanpham.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tenloaisanpham.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            
            
        ]);

    	$loaisanpham->tenloaisanpham = $request->tenloaisanpham;
    	$loaisanpham->id_theloai = $request->id_theloai;
    	$loaisanpham->save();
    	return redirect('admin/loaisanpham/danhsach')->with('thongbao',' Thêm thành công');

    }
    public function getsua($id){
    	$theloai = TheLoai::all();
    	$loaisanpham = LoaiSanPham::find($id);
    	return view('admin/loaisanpham/sua',['loaisanpham'=>$loaisanpham,'theloai'=>$theloai]);
    }
    public function postsua(Request $request, $id){
    	$loaisanpham =LoaiSanPham::find($id);
    	$loaisanpham->tenloaisanpham = $request->tenloaisanpham;
    	$loaisanpham->id_theloai = $request->id_theloai;
    	$loaisanpham->save();
    	return redirect('admin/loaisanpham/danhsach')->with('thongbao',' Sửa thành công');
    }
    public function getxoa($id){
        $loaisanpham = LoaiSanPham::find($id);
        $loaisanpham->delete();
        return redirect('admin/loaisanpham/danhsach')->with('thongbao',' Xóa thành công');
    }
}
