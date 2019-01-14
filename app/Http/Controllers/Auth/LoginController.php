<?php
namespace phplusir\smsir\Controllers;
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use phplusir\smsir\Smsir;
use phplusir\smsir\SmsirLogs;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
 
// when user loged in do somethings    
  
protected function authenticated(Request $request, $user)
{
        //  Smsir::send('شما وارد شدید' ,'09352572809');
        // Smsirlaravel::send(['test1','test2'],['09352572809','09352572809']);

        
    
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
