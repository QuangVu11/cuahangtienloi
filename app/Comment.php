<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  
    protected $table = "comment_product";
    public function sanpham(){
    	return $this->belongsTo('App\SanPham','idsanpham','id');
    }
    public function user(){
    	return $this->belongsTo('App\User','iduser','id');
    }

}
