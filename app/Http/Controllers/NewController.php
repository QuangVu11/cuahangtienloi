<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\CommentNew;

class NewController extends Controller
{
    public function getdanhsach(){
    	$new= News::all();
    	return view('admin.new.danhsach',['new'=>$new]);
    }
    public function getthem(){
    	$new = News::all();
    	return view('admin.new.them');
    }
    public function postthem(Request $request){
    	$new = new News;
        $this->validate($request,[
            'email'=>'required|min:3|max:100',
            'content'=>'required',
            'tomtat'=>'required',
        ],
        [
            'email.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'email.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'email.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tomtat.required'=>'Bạn chưa nhập nội dung tóm tắt',
            'content.required'=>'Bạn chưa nhập nội dung chính',
        ]);
    	$new->email=$request->email;
    	$new->content=$request->content;
        $new->tomtat=$request->tomtat;
    	if($request->hasFile('image')){
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png'){
                    return view('admin/new/them')->with('loi',' Đuôi ảnh không hợp lệ');
                }
            $name = $file->getClientOriginalName();
            $image = str_random(4)."_".$name;
            while (file_exists("uploads".$image)) {
                $image = str_random(4)."_".$name;
            }
            $file->move('uploads', $image);
            $new->image = $image;
        }
        else{
            $new->image = "";
        }
    	
    	$new->save();
    	return redirect('admin/new/danhsach')->with('thongbao',' Thêm thành công');
    }
    public function getsua($id){
    	$new= News::find($id);
    	return view('admin.new.sua',['new'=>$new]);
    }
    public function postsua(Request $request ,$id){
    	$new = News::find($id);
    	$new->email=$request->email;
    	$new->content=$request->content;
        $new->tomtat=$request->tomtat;
    	if($request->hasFile('image')){
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png'){
                    return view('admin/new/them')->with('loi',' Đuôi ảnh không hợp lệ');
                }
            $name = $file->getClientOriginalName();
            $image = str_random(4)."_".$name;
            while (file_exists("uploads".$image)) {
                $image = str_random(4)."_".$name;
            }
            $file->move('uploads', $image);
            $new->image = $image;
        }
        else{
            $new->image = "";
        }
    	
    	$new->save();
    	return redirect('admin/new/danhsach')->with('thongbao',' Thêm thành công');

    }
    public function getxoa($id){
        $new = News::find($id);
        $new->delete();
        return redirect('admin/new/danhsach');
    }
}
