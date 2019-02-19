<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\BillDetail;
use App\Customer;
use Session;
use Cart;
use Validator;
use App\SanPham;
use Illuminate\Support\Facades\Input;

class CartController extends Controller
{
	public function getAddCart($id){
		$sanpham= SanPham::find($id);
		Cart::add(['id'=>$id,'name'=>$sanpham->tensanpham,'quantity'=>1,'price'=>$sanpham->price,'attributes'=>['image'=>$sanpham->image]]);
		return redirect('cart/show');

	}
	public function showCart(){
		$data['total']=Cart::getTotal();
		$data['items']=Cart::getContent();
		return view('fronts.pages.cart',$data);
	}
	public function getDelete($id){
		if($id=='all'){
			Cart::clear();
			
		}
		else{
			Cart::remove($id);
		}
		return back();
	}
   public function getCheckOut() {
        $this->data['title'] = 'Check out';
        $this->data['items'] = Cart::getContent();
        $this->data['total'] = Cart::getTotal();
        return view('fronts.pages.checkout', $this->data);
    }

    public function postCheckOut(Request $request) {
        $cartInfor = Cart::getContent();
        // validate
        $rule = [
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone_number' => 'required|digits_between:10,12'

        ];
        
        $validator = Validator::make(Input::all(), $rule);
        
        if ($validator->fails()) {
            return redirect('cart/checkout')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        try {
            // save
            $customer = new Customer;
            $customer->name = $request->name;
            $customer->email =  $request->email;;
            $customer->address =  $request->address;;
            $customer->phone_number =  $request->phone_number;;
            //$customer->note = $request->note;
            $customer->save();

            $bill = new Bill;
            $bill->customer_id = $customer->id;
            $bill->date_order = date('Y-m-d H:i:s');
            $bill->total = str_replace(',', '', Cart::getTotal());
            $bill->note = $request->note;
            $bill->save();

            if (count($cartInfor) >0) {
                foreach ($cartInfor as $key => $item) {
                    $billDetail = new BillDetail;
                    $billDetail->bill_id = $bill->id;
                    $billDetail->product_id = $item->id;
                    $billDetail->quantity = $item->quantity;
                    $billDetail->price = $item->price;
                    $billDetail->save();
                }
            }
          // del
           Cart::clear();
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return redirect('trangchu');
    }
}
