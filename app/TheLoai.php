<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
  protected $table = "theloai";
  public function loaisanpham(){
  	return $this->hasMany('App\LoaiSanPham','id_theloai','id');
  }
  public function sanpham(){
  	return $this->hasManyThrough('App\SanPham','App\LoaiSanPham','id_theloai','id_loaisanpham');
  }
    
}
