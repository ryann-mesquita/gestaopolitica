<?php

namespace App\Http\Controllers\painel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cadastro;
use App\Http\Requests\Painel\ProductFormRequest;
use Gate;


class RelatoriosColaboradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    private $Nomes=[];    
    private $cadastro; // Atributo
    private $totalPage=10;
    public function __construct(Cadastro $cadastro) // D.I externa para usar em todos os métodos
    {
        $this->middleware('auth');
        $this->cadastro = $cadastro;  // Passando o Objeto para o produto
         //Visivel apenas para permisão 'edit_post'
       
    }
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       if(Gate::denies('edit_post'))
        abort(403, 'Acesso não permitido para seu perfil de login!');
       return view('relatorios-colaboradores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if(Gate::denies('edit_post'))
        abort(403, 'Acesso não permitido para seu perfil de login!');

       $colaboradores = Cadastro::all();//Recupera os dados da Model Product
       $dataForm = $request->except('_token');//Recupera os dados do form.
       $Nome= $request->input('nome');//Recupera o valor inserido no campo nome
       $end= $request->input('endereco');//Recupera o valor inserido no campo endereço
       $local= $request->input('localidade');
       $tit= $request->input('titulo');//Recupera o valor inserido no campo sexo
       $zone = $request->input('zona');
       $sec= $request->input('secao');
       $lid = $request->input('lider');
       $sublid = $request->input('sublider');

       
       if($request->has('nome')){
       //$consulta = $request->consulta; 

         $consulta= Cadastro::where('name', 'like',  $Nome. '%')
        ->orderBy('name', 'asc')->paginate($this->totalPage);
       
       
         }
                
        

       if($request->has('endereco')){
        
       $endereco= Cadastro::where('endereco', 'like', '%'. $end. '%')
       ->orderBy('name', 'asc')->paginate($this->totalPage);
       
         
      }    
        if($request->has('localidade')){

        $localidade= Cadastro::where('localidade', 'like',  $local)
      ->orderBy('name', 'asc')->paginate($this->totalPage);
        
    }

       if($request->has('titulo'))
        $titulo= Cadastro::where('titulo', '=',  $tit)
        ->orderBy('name', 'asc')->paginate($this->totalPage);
       

        if($request->has('zona')){
        $zona= Cadastro::where('zona','=', $zone)
        ->orderBy('name', 'asc')->paginate($this->totalPage);
        
        }

      if($request->has('secao')){
      $secao= Cadastro::where('secao', '=', $sec)
      ->orderBy('name', 'asc')->paginate($this->totalPage);
     
      
      } 
       
      
      if($request->has('lider')){
        $lider = Cadastro::where('lider', '=', $lid)
      ->orderBy('name', 'asc')->paginate($this->totalPage);
      
    }

      if($request->has('sublider')){
        $sublider = Cadastro::where('sublider', '=', $sublid)
      ->orderBy('name', 'asc')->paginate($this->totalPage);
      
        
   }


    //$aniv=Product::whereDay('date', '=', date('d'));
//dd($aniv);
   
       
      //$variaveis = array(;
  return view('resultado-relatorio-colaboradores', compact("consulta","endereco","localidade",
    "titulo","zona","secao","lider","sublider","dataForm"));
       
      
        
  }
       
       //return $consulta;

      /* $dataForm = $request->all();
       $Nome= $request->input('nome');
       foreach ($produtos as $produto) {
        $Nomes =  $produto->name; 
        return $Nomes;
   
}/*
       /*$teste = 
       
       if($Nome==$produtos->nome)
       {
        return $Nome ;
       }
       else
        return 'falhou' ;
        dd($dataForm);

        dd( $product->name);


        
        
        $Nome= $request->input('nome');
       // dd($Nome);
        dd($this->product->id);
        
        
       // dd($Nome);
        /*$vnome=$product->name ;
        $Rel= $Nome=$vnome;
        dd($Rel);
        $Teste=$request->input('id');
        dd($Teste);*/
       
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Request $request)
    {

       if(Gate::denies('edit_post'))
       abort(403, 'Acesso não permitido para seu perfil de login!');
       
       $now = new Carbon();
         $nowday=$now->day;
         $nowmonth=$now->month;
       
       if($request->input('dia')){
        
          $aniversario_day=Product::whereDay('date', '=', $nowday)
        ->whereMonth('date', '=',$nowmonth)
        ->orderBy('date', 'asc') 
        ->get();
        return view('resultado-aniv', compact("aniversario_day"));

       }     

        if($request->input('mes')){
          $aniversario_month=Product::whereMonth('date', '=',$nowmonth)
        ->orderBy('date', 'asc') 
        ->get();
        

        return view('resultado-aniv', compact("aniversario_month"));
            

    }
       /*  $now = new Carbon();
         $nowday=$now->day;
         $nowmonth=$now->month;
        // dd($nowday);
        
      //$date = Carbon::today();
      //dd($date);

       // dd($request->input('dia') == "dia");
        
        $aniversario_day=Product::whereDay('date', '=', $nowday)
        ->whereMonth('date', '=',$nowmonth)
        ->orderBy('date', 'asc') 
        ->get();
        
        
        $aniversario_month=Product::whereMonth('date', '=',$nowmonth)
        ->orderBy('date', 'asc') 
        ->get();
        

        return view('resultado-aniv', compact("aniversario_day","aniversario_month"));*/
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
   public function aniversario( Request $request)
    {
         if(Gate::denies('edit_post'))
        abort(403, 'Acesso não permitido para seu perfil de login!');
      
         $now = new Carbon();
         $nowday=$now->day;
         $nowmonth=$now->month;
       
       if($request->input('dia')){
        
          $aniversario_day=Product::whereDay('date', '=', $nowday)
        ->whereMonth('date', '=',$nowmonth)
        ->orderBy('date', 'asc') 
        ->get();
        
        return view('resultado-aniv', compact("aniversario_day"));

       }     

        if($request->input('mes')){
          $aniversario_month=Product::whereMonth('date', '=',$nowmonth)
        ->orderBy('date', 'asc') 
        ->get();
        

        return view('resultado-aniv', compact("aniversario_month"));
            

    }
}
}
