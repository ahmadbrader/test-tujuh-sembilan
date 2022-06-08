<?php

use App\Models\Transaksi;
use App\User;
use Illuminate\Database\Seeder;

class SeederFirst extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Customer 1'
        ]);

        User::create([
            'name' => 'Customer 2'
        ]);

        Transaksi::create([
            'account_id' => 1,
            'transaction_date' => '2017-01-01',
            'desc' => 'Setor Tunai',
            'debit_credit_status' => 'C',
            'amount' => 200000
        ]);

        Transaksi::create([
            'account_id' => 1,
            'transaction_date' => '2017-01-05',
            'desc' => 'Beli Pulsa',
            'debit_credit_status' => 'D',
            'amount' => 10000
        ]);

        Transaksi::create([
            'account_id' => 1,
            'transaction_date' => '2017-01-06',
            'desc' => 'Bayar Listrik',
            'debit_credit_status' => 'D',
            'amount' => 70000
        ]);

        Transaksi::create([
            'account_id' => 1,
            'transaction_date' => '2017-01-07',
            'desc' => 'Tarik Tunai',
            'debit_credit_status' => 'D',
            'amount' => 100000
        ]);

        Transaksi::create([
            'account_id' => 1,
            'transaction_date' => '2017-02-01',
            'desc' => 'Setor Tunai',
            'debit_credit_status' => 'C',
            'amount' => 300000
        ]);

        Transaksi::create([
            'account_id' => 1,
            'transaction_date' => '2017-02-05',
            'desc' => 'Bayar Listrik',
            'debit_credit_status' => 'D',
            'amount' => 50000
        ]);

        Transaksi::create([
            'account_id' => 1,
            'transaction_date' => '2017-02-15',
            'desc' => 'Tarik Tunai',
            'debit_credit_status' => 'D',
            'amount' => 50000
        ]);

        Transaksi::create([
            'account_id' => 1,
            'transaction_date' => '2017-02-20',
            'desc' => 'Beli Pulsa',
            'debit_credit_status' => 'D',
            'amount' => 40000
        ]);

        Transaksi::create([
            'account_id' => 1,
            'transaction_date' => '2017-02-28',
            'desc' => 'Tarik Tunai',
            'debit_credit_status' => 'D',
            'amount' => 50000
        ]);

        Transaksi::create([
            'account_id' => 1,
            'transaction_date' => '2017-03-01',
            'desc' => 'Setor Tunai',
            'debit_credit_status' => 'C',
            'amount' => 50000
        ]);

        Transaksi::create([
            'account_id' => 1,
            'transaction_date' => '2017-03-07',
            'desc' => 'Bayar Listrik',
            'debit_credit_status' => 'D',
            'amount' => 125000
        ]);

        Transaksi::create([
            'account_id' => 1,
            'transaction_date' => '2017-03-07',
            'desc' => 'Beli Pulsa',
            'debit_credit_status' => 'D',
            'amount' => 20000
        ]);
    }
}
