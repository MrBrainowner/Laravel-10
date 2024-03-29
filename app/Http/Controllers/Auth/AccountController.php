<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\RedirectResponse;

class AccountController extends Controller
{   

    public function __construct()
    {
        $this->middleware('guest');
    }

    //register
    public function ShowRegisterForm(){
        $currentPage = '/register';
        return view('auth.register', compact('currentPage'));
    }
    public function register(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'pass' => 'required|min:8',
            'rpass' => 'required|same:pass',
        ]);

        $user = new User();

        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->pass);

        $user->save();

        return redirect('/profile')->with('success', 'Registration successful');

    }
    
    // log in
    public function ShowLogInForm(){
        $currentPage = '/login';
        return view('auth.login', compact('currentPage'));
    }

    //log out
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/profile');
        }
 
        return back()->withErrors([
            'email' => 'Credentials Invalid!',
        ])->onlyInput('email');
    }
}

