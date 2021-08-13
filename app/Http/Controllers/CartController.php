<?php

namespace App\Http\Controllers;
use App\Product;
use App\Spa;
use App\Other;
use Session;
use Stripe;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        $spas = Spa::all();
        $others = Other::all();
        return view('wellness')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products, 'spas'=>$spas,  'others'=> $others]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
       
        return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }

    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }
    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Cart is cleared!');
    }


    public function checkout()
    {
        return view('checkout');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkoutPost(Request $request)
    {

       
        Stripe\Stripe::setApiKey('sk_test_51IYj13KlWyPG97llDGdoPfT1hxZXlk0LOlTMDfp4nJTRuic9t9QqJrHwqeyJKYYRdVCIxRNgzHNKSrHxPDnyX8XW00C44XGPUa');
        Stripe\Charge::create ([
                "amount" => 100*  \Cart::getTotal() ,
                "currency" => "myr",
                "source" => $request->stripeToken,
                "description" => "Halooo" 

        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }

}
