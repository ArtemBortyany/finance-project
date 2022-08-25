<?php

namespace App\Http\Controllers;

use App\Category;
use App\Transaction;
use App\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use const http\Client\Curl\AUTH_ANY;

class TransactionController extends Controller
{
    public function index()
    {

    }

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
        $transaction->category_id = $request->category_id;
        $transaction->save();

    }
    public function createCategory(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return response($category);
    }
    public function getCategory(Request $request)
    {
        $wallets = Category::get();

        return response($wallets);
    }
    public function allData(){
        return response(['transactions' => Transaction::with(['wallet', 'category'])->get()]);
    }
    public function WalletSum(Request $request){

        $wallet = Wallet::where('user_id', $request->user_id)->sum('balance');

        return response(['sum'=>$wallet]);
    }

    public function getTransactions(Request $request){

        if (!is_null($request->date_from)) {
            $startDate = Carbon::parse($request->date_from)->toDateString();
        }

        if (!is_null($request->date_to)) {
            $endDate = Carbon::parse($request->date_to)->toDateString();
        }

        $transactionsQuery = Transaction::with(['wallet', 'category']);

        if (isset($startDate)) {
            $transactionsQuery = $transactionsQuery->whereDate('created_at', '>=', $startDate);
        }

        if (isset($endDate)) {
            $transactionsQuery = $transactionsQuery->whereDate('created_at', '<=', $endDate);
        }

        return response(['transactions' => $transactionsQuery->get()]);
    }


}
