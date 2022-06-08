<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    public function index()
    {
        $data['users'] = User::all();

        return view('pages.nasabah.index', $data);   
    }

    public function add()
    {
        return view('pages.nasabah.add');
    }

    public function save(Request $request)
    {
        User::create([
            'name' => $request->name
        ]);

        return redirect('/nasabah');
    }
}
