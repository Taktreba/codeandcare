<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;


class CoinValueController extends Controller
{
    public function index()
    {

        return view('welcome');

    }

    public function ShowTable()
    {

        $blockchain = DB::table('blockchains')->latest('created_at')->limit(3)->get(); // берем по три последние записи из таблиц
        $coindesk = DB::table('coindesks')->latest('created_at')->limit(3)->get();

        return view('welcome', ['blockchain' => $blockchain, 'coindesk' => $coindesk]);

    }

}
