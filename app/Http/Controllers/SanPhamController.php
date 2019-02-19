<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\LoaiSanPham;
use App\TheLoai;
use App\Comment;
use Session;
use Cart;
use App\Productimg;
use Input;

class SanPhamController extends Controller
{
    public function getdanhsach(){
    	$sanpham = SanPham::all();
    	$loaisanpham= LoaiSanPham::all();
    	$theloai= TheLoai::all();
    	return view('admin.sanpham.danhsach',['sanpham'=>$sanpham,'loaisanpham'=>$loaisanpham,'theloai'=>$theloai]);
    }
    public function getthem(){
    	$theloai = TheLoai::all();
    	$loaisanpham= LoaiSanPham::all();

    	return view('admin.sanpham.them',['theloai'=>$theloai,'loaisanpham'=>$loaisanpham]);
    }
    public function postthem(Request $request){
        $sanpham = new SanPham;
         $this->validate($request,[
            'tensanpham'=>'required|min:3|max:100',
            'tomtat'=>'required',
            'content'=>'required',
            'price'=>'required',
            'image'=>'required',
            'noibat'=>'required',
            'soluong'=>'required',
            'luotmua'=>'required',
            
        ],
        [
            'tensanpham.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'tensanpham.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tensanpham.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tomtat.required'=>'Bạn chưa nhập nội dung tóm tắt',
            'content.required'=>'Bạn chưa nhập nội dung chính',
            'price.required'=>'Bạn chưa nhập giá',
            'image.required'=>'Bạn chưa nhập ảnh',
            'noibat.required'=>'Bạn chưa nhập nổi bật',
            'soluong.required'=>'Bạn chưa nhập số lượng',
            'luotmua.required'=>'Bạn chưa nhập lượt mua',
        ]);
        $sanpham->tensanpham=$request->tensanpham;
        $sanpham->tomtat=$request->tomtat;
        $sanpham->price=$request->price;
        $sanpham->content=$request->content;
         if($request->hasFile('image')){
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png'){
                    return view('admin/sanpham/them')->with('loi',' Đuôi ảnh không hợp lệ');
                }
            $name = $file->getClientOriginalName();
            $image = str_random(4)."_".$name;
            while (file_exists("uploads".$image)) {
                $image = str_random(4)."_".$name;
            }
            $file->move('uploads', $image);
            $sanpham->image = $image;
        }
        else{
            $sanpham->image = "";
        }
        $sanpham->noibat=$request->noibat;
        $sanpham->soluong=$request->soluong;
        $sanpham->luotmua=$request->luotmua;
        
        $sanpham->id_loaisanpham=$request->id_loaisanpham;
        $sanpham->save();
        $product_id=$sanpham->id;
        if($request->hasFile('imagepd')){
            foreach ($request->file('imagepd') as $file) {
            $product_img= new Productimg;
            $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png'){
                    return view('admin/sanpham/them')->with('loi',' Đuôi ảnh không hợp lệ');
                }
            $name = $file->getClientOriginalName();
            $imagepd = str_random(4)."_".$name;
            while (file_exists("uploads".$imagepd)) {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move('uploads', $imagepd);
            $product_img->imagepd = $imagepd;
            $product_img->product_id = $product_id;
            $product_img->save();
        }
    }
        else{
            $product_img->imagepd = "";
        }
        return redirect('admin/sanpham/danhsach')->with('thongbao',' Thêm thành công');

    }
    public function getsua($id){
        
        $theloai = TheLoai::all();
        $loaisanpham = LoaiSanPham::all();
        $sanpham = SanPham::find($id);
        return view('admin.sanpham.sua',['theloai'=>$theloai,'loaisanpham'=>$loaisanpham,'sanpham'=>$sanpham]);
    }
    public function postsua(Request $request,$id){
        $theloai = TheLoai::all();
        $loaisanpham = LoaiSanPham::all();
        $sanpham = SanPham::find($id);
        $sanpham->tensanpham=$request->tensanpham;
        $sanpham->tomtat=$request->tomtat;
        $sanpham->price=$request->price;
        $sanpham->content=$request->content;
         if($request->hasFile('image')){
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png'){
                    return view('admin/sanpham/them')->with('loi',' Đuôi ảnh không hợp lệ');
                }
            $name = $file->getClientOriginalName();
            $image = str_random(4)."_".$name;
            while (file_exists("uploads".$image)) {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move('uploads', $image);
            $sanpham->image = $image;
        }
        else{
            $sanpham->image = "";
        }
        $sanpham->noibat=$request->noibat;
        $sanpham->soluong=$request->soluong;
        $sanpham->luotmua=$request->luotmua;
        $sanpham->id_loaisanpham=$request->id_loaisanpham;
        $sanpham->save();
       

        return redirect('admin/sanpham/danhsach')->with('thongbao',' Sửa thành công');


    }
    public function getxoa($id){
        $sanpham = SanPham::find($id);
        $sanpham->delete();
        return redirect('admin/sanpham/danhsach')->with('thongbao',' Xóa thành công');
    }
   
}
