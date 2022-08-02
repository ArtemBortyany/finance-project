<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class, 'id', 'wallet_id');
    }
}
