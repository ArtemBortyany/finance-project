<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Wallet;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {

    }

    /*
     * 1. Создание кошелька createWallet() name = 'artem'
     * 2. озданрие транзакции к кошельку createTransaction() type = ['decrement', 'increment'], wallet_id, amount, comment */

    public function getWallet(Request $request)
    {
        $wallets = Wallet::where('user_id', $request->user_id)->with('transaction')->get();

        return response($wallets);
    }

    public function createWallet(Request $request)
    {
        $wallet = new Wallet();
        $wallet->name = $request->name;
        $wallet->user_id = $request->user_id;
        $wallet->save();

        return response($wallet);
    }

    public function createTransaction(Request $request)
    {
        $wallet = Wallet::where('id', $request->wallet_id)->first();
        if ($request->type == 'increment') {
            $wallet->balance  += $request->amount;
        } else {
            $wallet->balance  -= $request->amount;
        }
        $wallet->save();

        $transaction = new Transaction();
        $transaction->wallet_id = $wallet->id;
        $transaction->type = $request->type;
        $transaction->amount = $request->amount;
        $transaction->comment = $request->comment;
        $transaction->save();
        /*
         * получение кошелька по юзеру и по имени  $wallet = Wallet::where('user_id', $request->user_id)->first()
         * код по аналогии с createWallet только new Wallet() заменить на Transaction()
         * вычитаь или добавлять баланс к $wallet*/
    }
}
