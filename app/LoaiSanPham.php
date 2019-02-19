<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
  
    protected $table ="loaisanpham";
    public function theloai(){
    	return $this->belongsTo('App\TheLoai','id_theloai','id');

    }
    public function sanpham(){
    	return $this->belongsTo('App\SanPham','id_loaisanpham','id');
    }
}
