<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
class StripePaymentController extends Controller
{
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
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 10000,
                "currency" => "myr",
                "source" => $request->stripeToken,
                "description" => "Test payment from klinik.test" 

        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}