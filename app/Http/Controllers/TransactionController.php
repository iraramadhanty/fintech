<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Item;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        // $items     = Item::all();
        // $carts     = Transaction::where("user_id", Auth::user()->id)->where("status", 1)->where("type", 2)->get();
        // $checkouts = Transaction::where("user_id", Auth::user()->id)->where("status", 2)->where("type", 2)->get();
        // $balances  = Balance::where("user_id", Auth::user()->id)->first();

        // $total_cart     = 0;
        // $total_checkout = 0;

        // foreach($carts as $cart){
        //     $total_cart += ($cart->item->price * $cart->quantity);
        // }
        // foreach($checkouts as $checkout){
        //     $total_checkout += ($checkout->item->price * $checkout->quantity);
        // }


        $items  = Item::all();
        return view("pages.user.transaction", compact("items"));
    }
}
