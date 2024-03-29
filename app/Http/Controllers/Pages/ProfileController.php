<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
   public function __construct()
   {
        $this->middleware('auth');
   }
   public function profile(){

        return view('auth.profile');
   }
   public function logout(Request $request): RedirectResponse
     {
     Auth::logout();
     
     $request->session()->invalidate();
     
     $request->session()->regenerateToken();
     
     return redirect('/login');
     }
}
