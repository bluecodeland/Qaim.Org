<?php
namespace phplusir\smsir\Controllers;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use phplusir\smsir\Smsir;
use phplusir\smsir\SmsirLogs;
use Auth;
use Illuminate\Http\Request;

class dbtestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::table('users')->get();
        $smses = DB::table('smsir_logs')->get();


        return view('tes', ['users' => $users, 'smses' => $smses->where('id',1)]);
    }
}