<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getdanhsach(){
    	$user = User::all();
    	return view('admin.nguoidung.danhsach',['user'=>$user]);
    }
    public function getthem(){
    	return view('admin.nguoidung.them');
    }
    public function postthem(Request $request){
    	$user = new User;
         $this->validate($request,[
            'name'=>'required|min:3|max:100',
            'email'=>'required',
            'password'=>'required',
        ],
        [
            'name.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'name.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'name.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập password',
        ]);
    	$user->name=$request->name;
    	$user->email=$request->email;
    	$user->password = bcrypt($request->password);
    	$user->remember_token=$request->remember_token;
        $user->level = 0;
    	$user->save();
    	return redirect('admin/user/danhsach')->with('thongbao',' Thêm thành công');
    }
    public function getsua($id){
    	$user = User::find($id);
    	return view('admin.nguoidung.sua',['user'=>$user]);
    }
    public function postsua(Request $request , $id){
    	$user = User::find($id);
    	$user->name=$request->name;
    	$user->email=$request->email;
    	$user->password = bcrypt($request->password);
    	$user->remember_token=$request->remember_token;
    	$user->save();
    	return redirect('admin/user/danhsach')->with('thongbao',' Sửa thành công');
    }
    public function getdangnhap(){
        return view('admin.login');
    }
    public function postdangnhap(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('admin/sanpham/danhsach');
        }
        else{
            return redirect('admin/dangnhap')->with('thongbao', 'Đăng nhập thất bại');
        }
    }
     public function LogoutAdmin(){
        Auth::logout();
        return redirect('admin/dangnhap');
    }
}
