<?php
namespace phplusir\smsir\Controllers;
namespace App\Http\Controllers;
use phplusir\smsir\Smsir;
use phplusir\smsir\SmsirLogs;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $credit = Smsir::credit();
		$smsir_logs = SmsirLogs::orderBy('id','DESC')->paginate(config('smsir.in-page'));
		return view('home',compact('credit','smsir_logs'), array('user' => Auth::user()));
        // return view('home',compact('credit','smsir_logs'), array('user' => Auth::user()));
    }
}
