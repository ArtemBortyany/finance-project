<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $guarded = [];
    protected $fillable = [
        'wallet_id',
        'type',
        'amount',
        'comment',
        'category_id',
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class, 'id', 'wallet_id');
    }
}
