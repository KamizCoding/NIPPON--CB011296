<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;


class TemplateController extends Controller
{
    public function index(){
        return view('webpages.home');
    }

    public function about(){
        return view('webpages.about');
    }

    public function service(){
        return view('webpages.service');
    }


    public function yourvisa(){
        $post = Product::all();

        return view('webpages.yourvisa', compact('post'));
    }

    public function cart(){

        if(Auth::id())
        {
        $user = Auth::user()->id;

        $post = Cart::where('user_id', '=', $user)->get();

        return view('webpages.cart', compact('post'));
        }

        else
        {
            return redirect('login');
        }

    }

    public function remove_visa($id)
    {
        $post = cart::find($id);

        $post->delete();

        return redirect()->back();
    }

    public function payment(){
        return view('webpages.payment');
    }

    public function contact(){
        return view('webpages.contact');
    }



    public function read_more($id)
    {
        $post = Product::find($id);

        return view('webpages.readmore', compact('post'));
    }

    public function book_now(REQUEST $request, $id)
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $product = Product::find($id);
            $post = new Cart;
            $post->first_name=$user->first_name;
            $post->last_name=$user->last_name;
            $post->email=$user->email;
            $post->date_of_birth=$user->date_of_birth;
            $post->home_address=$user->home_address;
            $post->user_id=$user->id;
            $post->product_title=$product->Title;
            $post->product_quantity=$request->Quantity;
            $post->product_price=$product->Price * $request->Quantity;
            $post->product_image=$product->Image;
            $post->product_id=$product->id;

            $post->save();

            return redirect('cart');
        }

        else
        {
            return redirect('login');
        }
    }

    public function order()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $post = Cart::where('user_id','=',$user_id)->get();

        foreach($post as $post)
        {
            $order = new Order;
            $order->first_name=$post->first_name;
            $order->last_name=$post->last_name;
            $order->email=$post->email;
            $order->date_of_birth=$post->date_of_birth;
            $order->home_address=$post->home_address;
            $order->user_id=$post->user_id;
            $order->product_title=$post->product_title;
            $order->product_quantity=$post->product_quantity;
            $order->product_price=$post->product_price;
            $order->product_id=$post->product_id;
            $order->payment_status='Processing';
            $order->save();

            $cart_id = $post->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }

        return redirect('payment');;
    }

}
