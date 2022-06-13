<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table = 'wallets';

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
