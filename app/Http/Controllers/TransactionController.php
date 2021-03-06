<?php

namespace App\Http\Controllers;

use App\Category;
use App\Transaction;
use App\Wallet;
use Illuminate\Http\Request;

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
//Создать метод по примеру getWallet
//создать роут на получение категорий
//reloadWallets создать на подобе в хом блейд
//сделать такое же поле с выбором категории (пример выбор кошелька)
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
}
