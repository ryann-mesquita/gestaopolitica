<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    public function __construct(){
    	//$this->middleware('auth');

    }
    public function index()
    {
      return view('admin.index');
    }
    public function login()
    {
      return view('auth.login-adm');
    }
    public function postLogin(Request $request)
    {
        
      $validator = validator($request->all(), [
         'email'=> 'required|min:3|max:100',
         'password' => 'required|min:3|max:100',
        ]);
      if($validator->fails() ) {
        return redirect('/admin/login')
            ->withErrors($validator)
            ->withInput();      
      }
      //dd($request->get('email'));
      $credentials = ['email' => $request->get('email'), 'password' =>$request->get('password')];
       
       if ( auth()->guard('admin')->attempt($credentials) ) {
        return redirect('/admin');
       } else {
             return redirect('/admin/login')
               ->withErrors(['errors' => 'Login Inválido!'])
               ->withInput();  
       }
      }
 }
