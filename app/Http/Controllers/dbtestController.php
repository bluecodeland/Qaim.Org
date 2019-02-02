<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class dbtestController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $users = DB::table('users')->get();
        $smses = DB::table('smsir_logs')->get();


        return view('tes', ['users' => $users, 'smses' => $smses->where('id',1)]);
        
    }
}
