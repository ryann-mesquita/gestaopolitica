<?php

namespace App\Http\Controllers\painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use Gate;

class RolesController extends Controller

{
    private $role;

    public function __construct(Role $role) // D.I externa para usar em todos os métodos
    {
       // $this->middleware('auth');
        $this->role = $role;
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = $this->role->all();
        if(Gate::denies('adm'))
        abort(403, 'Acesso não permitido para seu perfil de login');
        return view('roles', compact('role'));
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
    public function permissions($id)
    {
        if(Gate::denies('adm'))
        abort(403, 'Acesso não permitido para seu perfil de login');
        //Recupera o Role
       $role = $this->role->find($id);
        
        //Recuperar permissões
        $permission = $role->permissions;
        
        return view('role-permission', compact('role','permission'));

    }
}
