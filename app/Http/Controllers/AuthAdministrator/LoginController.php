<?php

namespace App\Http\Controllers\AuthAdministrator;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:administrator')->except('logout');
    }

    public function showLogin()
    {
        return view('administrator.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('administrator')->attempt($credential, $request->member)){
            return redirect()->intended(route('administrator.home'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function logout(Request $request)
     {
         $this->guard()->logout();
 
         $request->session()->invalidate();
 
         return $this->loggedOut($request) ?: redirect('/');
     }
     
}
