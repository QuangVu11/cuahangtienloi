<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  protected $table ="news";
  public function comment(){
  	return $this->hasMany('App\CommentNew','idnews','id');
  }
    
}
