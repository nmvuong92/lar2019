<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;

class AdminController extends Controller
{
    //The create() method returns the view for registering a new admin.
    public function create()
    {
        return view('admin.register');
    }

    //The registerAdmin() method handles creating a new admin on the database and then returning the dashboard view for our admin once an account has been successfully created.
    public function registerAdmin(Request $request)
    {
      $this->validate($request, [
       'email'=> 'required|unique:users|email|max:255',
       'name'=>  'required',
       'password'=> 'required|min:6|confirmed'
    ]); 


     Admin::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'password'=>bcrypt($request->password)
    ]);
      return redirect()->intended('/home/admin');
    }

    public function loginAdmin()
    {
        return view('admin.login');
    }

    //The adminAuth() method authenticates a registered admin using the admin guard. Let's take a look at the following block of code to understand better.
    public function adminAuth(Request $request)
    {
       $this->validate($request, [
                'email'=>'required|email',
                'password'=>'required'
        ]);
        $email = $request->email;
        $password = $request->password;
        $remember = $request->remember;
        //Using the auth facade, we specify the admin guard as the instance we would like to use to manage our authentication in this case. 
        //The attempt method returns true if the authentication was successful and false if it wasn't.
        if(Auth::guard('admins')->attempt(['email'=> $email, 'password'=> $password], $remember)){
            return redirect()->intended('/home/admin');
        } else {
            return redirect()->back()->with('warning', 'Invalid Email or Password');
        }
    }
    public function home()
    {
        return view('admin');
    }

    public function logout()
    {
        Auth::guard('admins')->logout();

        return redirect('/login/admin'); 
    }

}