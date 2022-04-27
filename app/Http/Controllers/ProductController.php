<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    public function index(){
        $data = Product::all();
        return view('product',['product'=>$data]);
    }
    public function show($id){
        $product =  Product::find($id);
        return view('detail',['data'=>$product]);
    }
    public function search(Request $req){
        $data = Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['product'=> $data]);
    }
    public function addtoCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();

            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
    static function cartItem(){
        $userId = \Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    public function cartlist(){
        $userID = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id','=',$userID)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['product'=>$products]);
    }
    public function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    public function orderNow(){
        $userID = Session::get('user')['id'];
        $products = DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id','=',$userID)
            ->sum('products.price');
        return view('orderNow',['total'=>$products]);
    }
    public function orderplace(Request $request){
        $userID = Session::get('user')['id'];
        $allCart = Cart::where('user_id','=',$userID)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payment_method = $request->payment;
            $order->status = 'pending';
            $order->adress = $request->address;
            $order->save();
            $cart = Cart::where('user_id','=',$userID)->delete();
        }
        return redirect('/');
    }
    public function myorders(){
        $userID = Session::get('user')['id'];
        $order =  DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id','=',$userID)
            ->get();
        
            return view('myorders',['order'=>$order]);
    }   
}
