<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'account_id', 'transaction_date', 'desc', 'debit_credit_status', 'amount'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'account_id');
    }
}
