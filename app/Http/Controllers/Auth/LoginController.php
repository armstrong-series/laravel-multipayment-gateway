<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Session;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function loginView(){
        return view('Auth.login');
    }

    public function logout() {
		Auth::logout();
		return response()->redirectToRoute('login');
    }



	protected function login(Request $request) {

		$credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
			Session::put('errorMessage', 'Oops!, you might have wrong credentials');
			return redirect()->route('auth.login.account');
        }
		$user = Auth::user();

		if ($user->role == 'admin' || $user->role == 'support' ) {
            return response()->redirectToRoute('admin.dashboard');
		}
		if(!$user->is_active){
			$message = 'This account has been disabled';
            Session::put('errorMessage', $message);
			return response()->redirectToRoute('auth.logout');
		}
		return response()->redirectToRoute('user.dashboard');
	}
}
