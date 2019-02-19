<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\SanPham; 
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function getxoa($id,$idsanpham){
    	$comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/comment/'.$idsanpham);
    }
    public function postcomment($id, Request $request){
    	$idsanpham = $id;
    	$sanpham= SanPham::find($id);	
    	$comment = new Comment;
    	$comment->idsanpham = $idsanpham;
    	$comment->iduser = Auth::user()->id;
    	$comment->noidung = $request->noidung;
    	$comment->save();
    	return redirect("chitietsanpham/$id");	
    }
}
