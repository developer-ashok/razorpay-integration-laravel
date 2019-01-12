<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;

class RazorpayController extends Controller
{
    public function pay()
    {        
        return view('pay');
    }

    public function dopayment(Request $request)
    {
        //Input items of form
        $input = $request->all();
        
        //get API Configuration 
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        
        // amount should be in paisa like [10 INR = 1000 CENT]
        $order  = $api->order->create(array('receipt' => uniqid(), 'amount' => ($input['amount'] * 100), 'currency' => 'INR')); // Creates an order
        
        //dd($order);
        
        \Session::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        return redirect()->back();
    }
}
