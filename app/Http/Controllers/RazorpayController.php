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
        
        // Please check browser console.
        print_r($input);
        exit;
    }
}
