<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $query = Transaksi::select('transaksis.*');
        $data['users'] = User::all();

        if ($request->customer_id)
        {
            $query = $query->join('users', 'transaksis.account_id', 'users.id')
                    ->where('users.id', $request->customer_id);
        }

        if ($request->start)
        {
            $query = $query->where('transaksis.transaction_date', '>=', $request->start);
        }

        if ($request->end)
        {
            $query = $query->where('transaksis.transaction_date', '<=', $request->end);
        }

        $data['datas'] = $query->get();

        return view('pages.report.index', $data);
    }
}
