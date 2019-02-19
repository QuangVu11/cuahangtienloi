<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentNew extends Model
{
  protected $table = "comment_new";
  public function new(){
  	return $this->belongsTo('App\News','idnews','id');
  }
  public function user(){
  	return $this->belongsTo('App\User','iduser','id');
  }
    
}
