<?php

namespace App\Http\Controllers\painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cadastro;
use App\Http\Requests\Painel\CadastroFormRequest;
use App\Role;
use Auth;
use Gate;

class CadastroController extends Controller

{
    private $role;
    private $cadastro; // Atributo
    private $totalPage=10;
    
    public function __construct(Cadastro $cadastro) // D.I externa para usar em todos os métodos
    {
       $this->middleware('auth');
       $this->cadastro = $cadastro; 
       // $this->role = $role;
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

    $colaboradores =  $this->cadastro->orderBy('name', 'asc')->paginate($this->totalPage);
        return view('colaboradores-list', compact('colaboradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colaboradores', compact('title','categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CadastroFormRequest $request)
    {
       $dataForm = $request->all();
       $colaboradores = Cadastro::all();
      // $user_id = Auth::user()->id;

       $colaboradores = new Cadastro;
       $colaboradores->name=$request->name;
       $colaboradores->apelido=$request->apelido;
       $colaboradores->endereco=$request->endereco;
       $colaboradores->cep=$request->cep;
       $colaboradores->cidade=$request->cidade;
       $colaboradores->complemento=$request->complemento;
       $colaboradores->bairro=$request->bairro;
       $colaboradores->numero=$request->numero;
       $colaboradores->localidade=$request->localidade;
       $colaboradores->nomedamae=$request->nomedamae;
       $colaboradores->localdevotacao=$request->localdevotacao;
       $colaboradores->telefone=$request->telefone;
       $colaboradores->whatsapp=$request->whatsapp;
       $colaboradores->facebook=$request->facebook;
       $colaboradores->instagram=$request->instagram;
       $colaboradores->titulo=$request->titulo;
       $colaboradores->date=$request->date;
       $colaboradores->refarea=$request->refarea;
       $colaboradores->lider=$request->lider;
       $colaboradores->sublider=$request->sublider;
      // Atualização de 80 zonas e Seções;

        $zona_atual=$request->zona;
        $secao_atual=$request->secao;

        if($zona_atual==='0072' and $secao_atual==='0024'){
         $zona_atual='0043';
         $secao_atual='0801';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }

         if($zona_atual==='0072' and $secao_atual==='0025'){
         $zona_atual='0043';
         $secao_atual='0802';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0026'){
         $zona_atual='0043';
         $secao_atual='0803';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0446'){
         $zona_atual='0043';
         $secao_atual='0805';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0489'){
         $zona_atual='0043';
         $secao_atual='0806';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0213'){
         $zona_atual='0043';
         $secao_atual='0807';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0221'){
         $zona_atual='0043';
         $secao_atual='0808';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0234'){
         $zona_atual='0043';
         $secao_atual='0809';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0244'){
         $zona_atual='0043';
         $secao_atual='0810';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0390'){
         $zona_atual='0043';
         $secao_atual='0811';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0187'){
         $zona_atual='0043';
         $secao_atual='0812';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0188'){
         $zona_atual='0043';
         $secao_atual='0813';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0189'){
         $zona_atual='0043';
         $secao_atual='0814';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0190'){
         $zona_atual='0043';
         $secao_atual='0815';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0192'){
         $zona_atual='0043';
         $secao_atual='0817';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0193'){
         $zona_atual='0043';
         $secao_atual='0818';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0265'){
         $zona_atual='0043';
         $secao_atual='0819';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0266'){
         $zona_atual='0043';
         $secao_atual='0820';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0276'){
         $zona_atual='0043';
         $secao_atual='0821';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0284'){
         $zona_atual='0043';
         $secao_atual='0822';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0285'){
         $zona_atual='0043';
         $secao_atual='0823';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0303'){
         $zona_atual='0043';
         $secao_atual='0824';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0339'){
         $zona_atual='0043';
         $secao_atual='0825';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0342'){
         $zona_atual='0043';
         $secao_atual='0826';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0407'){
         $zona_atual='0043';
         $secao_atual='0827';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0424'){
         $zona_atual='0043';
         $secao_atual='0828';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0139'){
         $zona_atual='0043';
         $secao_atual='0829';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0140'){
         $zona_atual='0043';
         $secao_atual='0830';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0141'){
         $zona_atual='0043';
         $secao_atual='0831';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0142'){
         $zona_atual='0043';
         $secao_atual='0832';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0143'){
         $zona_atual='0043';
         $secao_atual='0833';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0144'){
         $zona_atual='0043';
         $secao_atual='0834';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0145'){
         $zona_atual='0043';
         $secao_atual='0835';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0146'){
         $zona_atual='0043';
         $secao_atual='0836';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0147'){
         $zona_atual='0043';
         $secao_atual='0837';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0148'){
         $zona_atual='0043';
         $secao_atual='0838';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0149'){
         $zona_atual='0043';
         $secao_atual='0839';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0150'){
         $zona_atual='0043';
         $secao_atual='0840';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0151'){
         $zona_atual='0043';
         $secao_atual='0841';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0152'){
         $zona_atual='0043';
         $secao_atual='0842';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0153'){
         $zona_atual='0043';
         $secao_atual='0843';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0154'){
         $zona_atual='0043';
         $secao_atual='0844';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0219'){
         $zona_atual='0043';
         $secao_atual='0845';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0220'){
         $zona_atual='0043';
         $secao_atual='0846';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0223'){
         $zona_atual='0043';
         $secao_atual='0847';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0467'){
         $zona_atual='0043';
         $secao_atual='0848';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0482'){
         $zona_atual='0043';
         $secao_atual='0849';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0329'){
         $zona_atual='0043';
         $secao_atual='0850';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0353'){
         $zona_atual='0043';
         $secao_atual='0851';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0376'){
         $zona_atual='0043';
         $secao_atual='0852';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0413'){
         $zona_atual='0043';
         $secao_atual='0853';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0440'){
         $zona_atual='0043';
         $secao_atual='0854';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0160'){
         $zona_atual='0043';
         $secao_atual='0855';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0161'){
         $zona_atual='0043';
         $secao_atual='0856';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0162'){
         $zona_atual='0043';
         $secao_atual='0857';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0163'){
         $zona_atual='0043';
         $secao_atual='0858';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0415'){
         $zona_atual='0043';
         $secao_atual='0859';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0445'){
         $zona_atual='0043';
         $secao_atual='0860';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0503'){
         $zona_atual='0043';
         $secao_atual='0861';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0043'){
         $zona_atual='0043';
         $secao_atual='0862';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0044'){
         $zona_atual='0043';
         $secao_atual='0863';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0045'){
         $zona_atual='0043';
         $secao_atual='0864';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0476'){
         $zona_atual='0043';
         $secao_atual='0865';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0206'){
         $zona_atual='0043';
         $secao_atual='0866';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0207'){
         $zona_atual='0043';
         $secao_atual='0867';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0208'){
         $zona_atual='0043';
         $secao_atual='0868';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0209'){
         $zona_atual='0043';
         $secao_atual='0869';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0290'){
         $zona_atual='0043';
         $secao_atual='0870';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0293'){
         $zona_atual='0043';
         $secao_atual='0871';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0294'){
         $zona_atual='0043';
         $secao_atual='0872';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0296'){
         $zona_atual='0043';
         $secao_atual='0873';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0349'){
         $zona_atual='0043';
         $secao_atual='0874';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0384'){
         $zona_atual='0043';
         $secao_atual='0875';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0449'){
         $zona_atual='0043';
         $secao_atual='0876';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0986'){
         $zona_atual='0043';
         $secao_atual='0877';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0501'){
         $zona_atual='0043';
         $secao_atual='0878';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }
         if($zona_atual==='0072' and $secao_atual==='0411'){
         $zona_atual='0043';
         $secao_atual='0804';
         $colaboradores->zona=$zona_atual;
         $colaboradores->secao=$secao_atual;
         }


   

       
       
         $insert = $colaboradores->save();

        if($insert)
        return redirect()
        ->route('colaboradores.index')
        ->with('success', 'Colaborador Inserido com Sucesso!');
        else
            return redirect()
        ->route('colaboradores.create')
        ->with('error', 'Falha ao inserir');
     
      // $products->user_id = $user_id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //Visivel apenas para permisão 'edit_post'
       if(Gate::denies('edit_post'))
        abort(403, 'Acesso não permitido para seu perfil de login!');
        $colaboradores = $this->cadastro->find($id);
        return view('colaboradores-show', compact('colaboradores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Visivel apenas para permisão 'edit_post'
       if(Gate::denies('edit_post'))
        abort(403, 'Acesso não permitido para seu perfil de login!');
        $colaboradores = $this->cadastro->find($id);
        return view('colaboradores-edit', compact('colaboradores'));
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

        //Visivel apenas para permisão 'edit_post'
       if(Gate::denies('edit_post'))
        abort(403, 'Acesso não permitido para seu perfil de login!');
                    //Recupera todos os dados do formulário
            $dataForm = $request->all();
            //Recupera o item para editar
            $colaboradores = $this->cadastro->find($id);
            //Verifica se o produto ta ativado
           // $dataForm['active'] = (!isset( $dataForm['active']) )?0 :1;
            //Altera os itens
            $update = $colaboradores->update($dataForm);
            //Verifica se realmente editou
            
            if($update)

                return redirect()
              ->route('colaboradores.index')
              ->with('success', 'Cadastro Editado com Sucesso!');
            else
                return redirect()->route('colaboradores.edit',$id)->with(['errors' => 'Falha ao editar']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //Visivel apenas para permisão 'edit_post'
       if(Gate::denies('edit_post'))
        abort(403, 'Acesso não permitido para seu perfil de login!');
      $colaboradores = $this->cadastro->find($id);
      $delete = $colaboradores->delete();
      if($delete)
      return redirect()
      ->route('colaboradores.index')
      ->with('success', 'Cadastro deletado com Sucesso!');
      else
      return redirect()->route('dashboard.show', $id)->with(['errors' => 'Falha ao Deletar']);
    }

    public function profile($id)
    {
      $colaboradores = $this->cadastro->find($id);
      return view('profile-colaboradores',compact('colaboradores'));
    }

}
