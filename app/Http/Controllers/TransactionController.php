<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index ()
    {
        $transactions = Transaction::all();
        return view('MTransaction', compact('transactions'));
        //return $transaction;
        //return view('MTransaction');
    }
}
