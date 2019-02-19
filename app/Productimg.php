<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productimg extends Model
{
    protected $table="images";
    public function sanpham(){
    	return $this->belongSto('App\SanPham','idsanpham','id');
    }
}
