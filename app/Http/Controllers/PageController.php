<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\Banner;
use App\LoaiSanPham;
use App\SanPham;
use App\News;
use Session;
use Cart;
use App\Productimg;
use App\User;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    function trangchu(Request $request){
    	$sanpham4= SanPham::where('id_loaisanpham',4)->get();
    	$sanpham5= SanPham::where('id_loaisanpham',5)->get();
    	$sanpham6= SanPham::where('id_loaisanpham',6)->get();
    	$sanpham7= SanPham::where('id_loaisanpham',7)->get();
    	$sanpham8= SanPham::where('id_loaisanpham',8)->get();
        $sanpham9= SanPham::where('id_loaisanpham',9)->get();
        $sanpham10= SanPham::where('id_loaisanpham',10)->get();
        $sanpham11= SanPham::where('id_loaisanpham',11)->get();
    	$theloai= TheLoai::all();
    	$loaisanpham = LoaiSanPham::all();
    	$banner= Banner::all();
        $sanphamct = SanPham::where('id',$request->id)->first();
    	return view('fronts.pages.index',compact('theloai','banner','loaisanpham','sanpham4','sanpham7','sanpham8','sanpham5','sanpham6','sanpham9','sanpham10','sanpham11','sanphamct'));

    }
     function __construct(){
        $items = Cart::getContent();
    	$theloai = Theloai::all();
    	$loaisanpham = LoaiSanPham::all();
        view()->share('items',$items);
    	view()->share('theloai',$theloai);
    	view()->share('loaisanpham',$loaisanpham);
        if(Auth::check()){
            view()->share('nguoidung',Auth::user());
        }
    }
    function loaisanpham($id){
    	$sanpham_theoloai = SanPham::where('id_loaisanpham',$id)->get();
    	return view('fronts.pages.loaisanpham',compact('sanpham_theoloai'));
    }
    function blog(){
        $blog = News::all();
        return view('fronts.pages.news',compact('blog'));
    }
    function sanpham(){
        $sanphamall = SanPham::all();
        return view('fronts.pages.sanpham',compact('sanphamall'));
    }
    function getchitiet(Request $request,$id){
       
        $images = Productimg::where('product_id',$request->id)->get();
        $sanpham = SanPham::find($id);
        $sanphamnb = SanPham::where('id_loaisanpham',4)->get();
        $sanphamct = SanPham::where('id',$request->id)->first();
        return view('fronts.pages.chitietsanpham',compact('sanphamct','sanphamnb','sanpham','images'));
    }
    function getnew(Request $request){
        $new = News::where('id',$request->id)->first();
        return view('fronts.pages.chitietnews',compact('new'));
    }
    function getdangnhapND(){
        return view('fronts.pages.login');
    }
    function postdangnhapND(Request $request){
          if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('trangchu');
        }
        else{
            return redirect('trangchu/dangnhap')->with('thongbao', 'Đăng nhập thất bại');
        }
    }
    function getdangxuat(){
        Auth::logout();
        return redirect('trangchu');
    }
    function timkiem(Request $request){
        $tukhoa= $request->tukhoa;
        $sanpham= SanPham::where('tensanpham','like',"%$tukhoa%")->orWhere('price','like',"%$tukhoa%")->take(30)->paginate(5);
        return view('fronts.pages.timkiem',compact('sanpham','tukhoa'));
    }
    function getnguoidung(){
        $user = Auth::user();

        return view('fronts.pages.nguoidung',['nguoidung'=>$user]);
    }
    function postnguoidung(Request $request){
        $user = Auth::user();
        $user->name=$request->name;
        $user->password = bcrypt($request->password);
        $user->level=0;
        $user->save();
        return redirect('trangchu/dangnhap')->with('thongbao','Chúc mừng bạn đã đăng ký thành công');
    }
    function getdangki(){
        return view('fronts.pages.themnguoidung');
    }
    function postdangki(Request $request){
        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = bcrypt($request->password);
        $user->level=0;
        $user->save();
        return redirect('trangchu/dangnhap')->with('thongbao','Chúc mừng bạn đã đăng ký thành công');
    }

    
}