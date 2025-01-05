<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Exception;
use App\Models\Buy;
use Illuminate\Support\Facades\Auth;



class PaymentController extends Controller
{
    public function store(Request $request)
    {
        try {
            Stripe::setApiKey(config('stripe.stripe_secret_key'));
            $user = Auth::user();
            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));



            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $request->pay,
                'currency' => 'jpy'
            ));

            $buy = [
                'user_id' => $user['id'],
                'item_id' => $request->item_id,
            ];
            Buy::create($buy);

            return redirect(route('item.detail', [
                'item_id' => $request->item_id,
            ]));
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
}
