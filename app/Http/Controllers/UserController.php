<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //


    public function logincheck(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'exists:users'],
            'password' => ['required', 'string', 'min:4']
        ], [
            'email.exist'=>'This email does not exist in the users table'
        ]);
        $creds = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($creds)) {
            return redirect()->route('web.home')->with('success', 'You have successfully login');
        }else{
            return redirect()->route('web.login')->with('error', 'Failed to login');
        }
    }


    public function home(){
      
        return view('home');
    }

    public function profile(){
      
        return view('pages.profile');
    }

    public function viewsfees($ref_no){
      $view_payments = User::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.viewsfees', compact('view_payments'));
    }
    public function print1stinglepaymentspdf($ref_no){
        $view_prints = User::where('ref_no', $ref_no)->first();
          return view('dashboard.admin.print1stinglepaymentspdf', compact('view_prints'));
      }
    
    public function viewallpayment(){
        $view_payments = User::latest()->get();
          return view('dashboard.admin.viewallpayment', compact('view_payments'));
      }

      
    
    
    
    public function logout(){
        Auth::guard('web')->logout();
        return redirect('login');
    }
}
