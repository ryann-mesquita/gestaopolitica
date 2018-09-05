<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        /*$this->middleware('auth')
                    ->only([
                         'contato',
                         'categoria'
                        ]);*/
        /*$this->middleware('auth')
                        ->except([
                                'index',
                                'contato'
                            ]);*/
    
    }
    public function index()
    {
      
    return view('painel.products.index');
       //return view('teste');
    }
    public function contato()
    {
    	return view('site.contact.index');
    }
    public function categoria()
    {
    	return view('usuarios');
    }
     public function categoriaop()
    {
    	return view('dashboard');
    }
}
