<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
     protected $table = "bill_details";
     public function sanpham(){
    	return $this->belongsTo('App\SanPham','product_id','id');

    }
}
