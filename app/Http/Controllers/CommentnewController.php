<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommentNew;
use App\User;
use App\News; 
use Illuminate\Support\Facades\Auth;

class CommentnewController extends Controller
{
    public function postcomment($id, Request $request){
    	$idnews = $id;
    	$new= News::find($id);	
    	$comment = new CommentNew;
    	$comment->idnews = $idnews;
    	$comment->iduser = Auth::user()->id;
    	$comment->content = $request->content;
    	$comment->save();
    	return redirect("chitietnews/$id");	
    }
}
