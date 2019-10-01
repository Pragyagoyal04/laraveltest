<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ChargeController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        // stripe ID is already stored in users table
       // $charge = $user->charge(9000);
        //dd($charge);
        return view("stripe");
    }
    public function store(Request $request) {
        //dd($request);
        $stripeToken = $request->get('stripe_token');
        $plan = 'prod_Ft0crHj9HEQlNt';
        $user = User::find(1);
        $user->newSubscription('main', $plan)->create($stripeToken);
    }
}
