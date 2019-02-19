<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
  protected $table ="sanpham";
  public function loaisanpham(){
  	return $this->belongsTo('App\LoaiSanPham','id_loaisanpham','id');

  }
  public function comment(){
  	return $this->hasMany('App\Comment','idsanpham','id');
  }
  public function image(){
    return $this->hasMany('App\Productimg','idsanpham','id');
  }
  public function billdetail(){
  	return $this->hasMany('App\BilDetail','product','id');
  }
}
