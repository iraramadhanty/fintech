<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class DatatransaksiController extends Controller
{
    public function index(){
        $details = Transaction::where('type', 2)
                    ->get(); 
        $transactions = Transaction::where('type', 2)
                        ->groupBy('invoice_id')
                        ->get();

        return view('pages.data_transaction', compact('details', 'transaction'));
    }
}
