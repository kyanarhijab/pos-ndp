<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\session;

class AuthController extends Controller
{

    public function index(){
       
        if ( Session::has('pos')  ){
            return redirect()->intended('home');
        } else{
            return view('auth/login');
        }  
        
     }
    
    public function proses_login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
    
        $credential = $request->only('username','password');

        
        if(Auth::attempt($credential)){
           
            $user =  Auth::user();
            
            if($user->level != ''){
                session(['pos' => $user->level]);
                return redirect()->intended('home');
            }
                 
            return redirect()->intended('login');
        }

        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal'=>'User & Pass Tidak Sesuai']);

    }

     public function logout(Request $request){

        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
      }
}