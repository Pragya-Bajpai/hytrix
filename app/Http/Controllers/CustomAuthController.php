<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
       
 
    public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        $validated=auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password
            
        ]);
        
        if($validated){
          
            return redirect()->route('admindashboard')->with('success','Login Successfull');
        }else{
            return redirect()->back()->with('error','Invalid credentials');
        }
    }
 
 
 
    public function registration()
    {
        return view('auth.registration');
    }
       
 
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
          
        return redirect("jobapp")->withSuccess('You have signed-in');
    }
 
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
     
 
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
   
        return redirect("login")->withSuccess('You are not allowed to access');
    }
     
 
    public function signOut() {
		Session::flush();
        Auth::logout();
   
        return redirect()->route('login');
    }
}
