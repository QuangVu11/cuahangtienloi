<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Bill;
use App\BillDetail;
use Cart;
use App\SanPham;


class OderController extends Controller
{
    public function getdanhsach(){
    	$oder = Customer::all();
    	$data['items'] = Cart::getContent();
        $data['total'] = Cart::getTotal();
    	return view('admin.oder',$data,compact('oder'));
    }
    public function getchitiet($id){
    	$bill=Bill::where('customer_id',$id)->get();
    	return view('admin.bill',compact('bill'));
    }
    public function getchitietbill($id){
    	$sanpham = Sanpham::all();
    	$billdt= BillDetail::where('bill_id',$id)->get();
    	return view('admin.billdetail',compact('billdt','sanpham'));

    }
    public function getxoa($id){
        $billdt = BillDetail::find($id);
        $billdt->delete();
        return redirect('admin/oder/danhsach');
    }
}
