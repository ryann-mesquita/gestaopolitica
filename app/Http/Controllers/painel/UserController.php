<?php

namespace App\Http\Controllers\painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Gate;
class UserController extends Controller
{

    public function __construct(User $user) // D.I externa para usar em todos os métodos
    {
       // $this->middleware('auth');
        $this->user = $user;

        
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = $this->user->all();
        
        if(Gate::denies('adm'))
          abort(403, 'Acesso não permitido para seu perfil de login');
        return view('usuarios', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function roles($id)
    {
      
    if(Gate::denies('adm'))
    abort(403, 'Acesso não permitido para seu perfil de login');
        //Recupera o usuário
        $users = $this->user->find($id);

        $roles = $users->roles()->get();
        //Recupera os Roles
     
     
     return view('user-roles', compact('users','roles'));

 }
}
