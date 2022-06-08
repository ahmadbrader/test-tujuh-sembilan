<?php

namespace App\Http\Controllers;

use App\Models\Point;
use App\Models\Transaksi;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
        $data['transactions'] = Transaksi::all();

        return view('pages.transaksi.index', $data);
    }

    public function add()
    {
        $data['users'] = User::all();
        return view('pages.transaksi.add', $data);
    }

    public function save(Request $request)
    {
        DB::beginTransaction();

        try {
            if ($request->desc == 'Beli Pulsa' && $request->amount > 10000)
            {
                $result = fmod($request->amount, 1000);
                if ($result == 0) $result = $request->amount;
                else $result = $request->amount - $result;
                $result = $result / 1000;
                if ($request->amount > 30000) $result = $result * 2;
                $this->addPoint($request->customer_id, $result);
                
            }

            elseif($request->desc == 'Bayar Listrik' && $request->amount > 50000)
            {
                $result = fmod($request->amount, 2000);
                if ($result == 0) $result = $request->amount;
                else $result = $request->amount - $result;
                $result = $result / 2000;
                if ($request->amount > 100000) $result = $result * 2;
                $this->addPoint($request->customer_id, $result);
                
            }

            $respon = Transaksi::create([
                'account_id' => $request->customer_id,
                'desc' => $request->desc,
                'debit_credit_status' => $request->debit_credit_status,
                'transaction_date' => date('Y-m-d H:i:s'),
                'amount' => $request->amount
            ]);

            DB::commit();
            return redirect('/transaksi');
        } catch (\Exception $e) {
            DB::rollback();
            echo 'Error';
        }
        
    }

    private function addPoint($account_id, $point)
    {
        $data = Point::where('account_id', $account_id)->first();
        if (!$data)
        {
            $data = Point::create([
                'account_id' => $account_id,
                'point' => 0
            ]);
        }

        $data->point += $point;
        $data->save();
        return;
    }
}
