<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    
    protected $maxAttempts = 3;
    protected $decayMinutes = 2;
    public function __construct()
    {
        $this->middleware('guest:user')->except('postLogout');
    }
    public function getLogin()
    {
        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
        if (auth()->guard('user')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            return redirect()->intended();
        } else {
            $this->incrementLoginAttempts($request);
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
      }
    public function postLogout()
    {
        auth()->guard('user')->logout();
        session()->flush();
        return redirect()->route('user.login');
    }
}
