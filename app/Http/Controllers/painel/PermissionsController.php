<?php

namespace App\Http\Controllers\painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Permission;
use Gate;

class PermissionsController extends Controller
{
    private $permission;

    public function __construct(Permission $permission) // D.I externa para usar em todos os métodos
    {
       $this->middleware('auth');

        $this->permission = $permission;
         
             
        
            }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission = $this->permission->all();
        if ( Gate::denies('adm'))
         return abort(403, 'Acesso não permitido para seu perfil de login!!!');
      
        return view('permissions', compact('permission'));

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
        //Recupera a Permissão
       $permission = $this->permission->find($id);

        if ( Gate::denies('adm'))
         return abort(403, 'Acesso não permitido para seu perfil de login!!!');
        //Recupera os Roles
        $roles = $permission->roles()->get();

        return view('permission-role', compact('permission','roles'));

    }

}
