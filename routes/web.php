<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('admin/dangnhap','UserController@getdangnhap');
Route::post('admin/dangnhap','UserController@postdangnhap');
Route::get('admin/logout','UserController@LogoutAdmin');
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::group(['prefix'=>'theloai'],function(){
		Route::get('danhsach','TheloaiController@getdanhsach');
		Route::get('them','TheloaiController@getthem');
		Route::post('them','TheloaiController@postthem');
		Route::get('sua/{id}','TheloaiController@getsua');
		Route::post('sua/{id}','TheloaiController@postsua');
		Route::get('xoa/{id}','TheloaiController@getxoa');
	});
	Route::group(['prefix'=>'loaisanpham'],function(){
		Route::get('danhsach','LoaiSanPhamController@getdanhsach');
		Route::get('them','LoaiSanPhamController@getthem');
		Route::post('them','LoaiSanPhamController@postthem');
		Route::get('sua/{id}','LoaiSanPhamController@getsua');
		Route::post('sua/{id}','LoaiSanPhamController@postsua');
		Route::get('xoa/{id}','LoaiSanPhamController@getxoa');
	});
	Route::group(['prefix'=>'sanpham'],function(){
		Route::get('danhsach','SanPhamController@getdanhsach');
		Route::get('them','SanPhamController@getthem');
		Route::post('them','SanPhamController@postthem');
		Route::get('sua/{id}','SanPhamController@getsua');
		Route::post('sua/{id}','SanPhamController@postsua');
		Route::get('xoa/{id}','SanPhamController@getxoa');
	});
	Route::group(['prefix'=>'comment'],function(){
		Route::get('xoa/{id}/{idsanpham}','CommentController@getxoa');
	});
	Route::group(['prefix'=>'commentnew'],function(){
		Route::get('xoa/{id}','CommentnewController@getxoa');
	});

	Route::group(['prefix'=>'user'],function(){
		Route::get('danhsach','UserController@getdanhsach');
		Route::get('them','UserController@getthem');
		Route::post('them','UserController@postthem');
		Route::get('sua/{id}','UserController@getsua');
		Route::post('sua/{id}','UserController@postsua');
	});
	Route::group(['prefix'=>'new'],function(){
		Route::get('danhsach','NewController@getdanhsach');
		Route::get('them','NewController@getthem');
		Route::post('them','NewController@postthem');
		Route::get('sua/{id}','NewController@getsua');
		Route::post('sua/{id}','NewController@postsua');
		Route::get('xoa/{id}','NewController@getxoa');
	});
	Route::group(['prefix'=>'slide'],function(){
		Route::get('danhsach','BannerController@getdanhsach');
		Route::get('them','BannerController@getthem');
		Route::post('them','BannerController@postthem');
		Route::get('sua/{id}','BannerController@getsua');
		Route::post('sua/{id}','BannerController@postsua');
		Route::get('xoa/{id}','BannerController@getxoa');
	});
	Route::group(['prefix'=>'oder'],function(){
		Route::get('danhsach','OderController@getdanhsach');
		Route::get('xoa/{id}','OderController@getxoa');
		Route::get('chitiet/{id}','OderController@getchitiet');
		Route::get('chitietbill/{id}','OderController@getchitietbill');
	});

	Route::group(['prefix'=>'ajax'],function(){
		Route::get('loaisanpham','AjaxController@getloaisanpham')->name('loaisanpham');
	});
});

Route::get('trangchu','PageController@trangchu'); 
Route::get('loaisanpham/{id}','PageController@loaisanpham');
Route::get('blog','PageController@blog');
Route::get('sanpham','PageController@sanpham');
Route::get('chitietsanpham/{id}','PageController@getchitiet');
Route::get('chitietnews/{id}','PageController@getnew');
Route::get('trangchu/dangnhap','PageController@getdangnhapND');
Route::post('trangchu/dangnhap','PageController@postdangnhapND');
Route::get('dangxuat','PageController@getdangxuat');
Route::post('fronts/comment/{id}','CommentController@postcomment')->name('comment');
Route::post('fronts/commentnew/{id}','CommentnewController@postcomment');
Route::group(['prefix'=>'cart'],function(){
	Route::get('add/{id}','CartController@getAddCart');
	Route::get('show','CartController@showCart');
	Route::get('delete/{id}','CartController@getDelete');
	Route::get('update-quantity/{id}/{quantity}','CartController@updatecart');
	Route::get('/checkout', 'CartController@getCheckOut');
    Route::post('/checkout', 'CartController@postCheckOut');
});
Route::post('fronts/timkiem','PageController@timkiem');
Route::get('nguoidung','PageController@getnguoidung');
Route::post('fronts/nguoidung','PageController@postnguoidung');
Route::get('trangchu/dangki','PageController@getdangki');
Route::post('fronts/dangki','PageController@postdangki');


