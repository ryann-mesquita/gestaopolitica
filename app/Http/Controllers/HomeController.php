<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('chart');
    }
        public function rolesPermissions()
    {
        $nameUser=auth()->user()->name;
        var_dump("<h1>{$nameUser} </h1>");

        foreach(auth()->user()->roles as $role)
        {
            echo "$role->name ->";

            $permissions = $role->permissions;
            foreach($permissions as $permission )
            {
                echo "$permission->name, ";
            }
        }
    }
}
