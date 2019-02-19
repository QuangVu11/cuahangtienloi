<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class BannerController extends Controller
{
    public function getdanhsach(){
    	$banner = Banner::all();
    	return view('admin.slide.danhsach',['banner'=>$banner]);
    }
    public function getthem(){
    	return view('admin.slide.them');
    }
    public function postthem(Request $request){
    	$banner = new Banner; $this->validate($request,[
            'image'=>'required',
        ],
        [
            'image.required'=>'Bạn chưa nhập ảnh',
        ]);
    	   if($request->hasFile('image')){
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png'){
                    return view('admin/slide/them')->with('loi',' Đuôi ảnh không hợp lệ');
                }
            $name = $file->getClientOriginalName();
            $image = str_random(4)."_".$name;
            while (file_exists("uploads".$image)) {
                $image = str_random(4)."_".$name;
            }
            $file->move('uploads', $image);
            $banner->image = $image;
        }
        else{
            $banner->image = "";
        }
        $banner->save();
        return redirect('admin/slide/danhsach')->with('thongbao',' Thêm thành công');
    }
    public function getxoa($id){
        $banner = Banner::find($id);
        $banner->delete();
        return redirect('admin/slide/danhsach')->with('thongbao',' Xóa thành công');
    }
    public function getsua($id, Request $request){
        $banner = Banner::find($id);
        return view('admin.slide.sua',['banner'=>$banner]);
    }
    public function postsua(Request $request,$id){
        $banner =Banner::find($id);
           if($request->hasFile('image')){
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png'){
                    return view('admin/slide/them')->with('loi',' Đuôi ảnh không hợp lệ');
                }
            $name = $file->getClientOriginalName();
            $image = str_random(4)."_".$name;
            while (file_exists("banner".$image)) {
                $image = str_random(4)."_".$name;
            }
            $file->move('banner', $image);
            $banner->image= $image;
        }
        else{
            $banner->image = "";
        }
        $banner->save();
        return redirect('admin/slide/danhsach')->with('thongbao',' Sửa thành công');
    }
}

