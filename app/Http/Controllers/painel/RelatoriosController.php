<?php

namespace App\Http\Controllers\painel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Painel\Product;
use App\Http\Requests\Painel\ProductFormRequest;
use Gate;

class RelatoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    private $Nomes=[];    
    private $product; // Atributo
    private $totalPage=10;
    public function __construct(Product $product) // D.I externa para usar em todos os métodos
    {
        $this->middleware('auth');
        $this->product = $product; // Passando o Objeto para o produto
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('relatorios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       
      
        
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
       if(Gate::denies('adm'))
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
         if(Gate::denies('adm'))
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
public function search( Request $request){
 if(Gate::denies('adm'))
   abort(403, 'Acesso não permitido para seu perfil de login!');

       $produtos = Product::all();//Recupera os dados da Model Product
       $dataForm = $request->except('_token');//Recupera os dados do form.
       
       $Nome= $request->input('nome');//Recupera o valor inserido no campo nome
       $end= $request->input('endereco');//Recupera o valor inserido no campo endereço
       $religiao= $request->input('religiao');
       $sex= $request->input('sexo');//Recupera o valor inserido no campo sexo
       $formacao = $request->input('formacao');
       $lideranca= $request->input('lideranca');
       $prioridade = $request->input('prioridade');
       
       if($request->has('nome'))
       //$consulta = $request->consulta; 
         $consulta= Product::where('name', 'like',  $Nome. '%')
       ->orderBy('name', 'asc')->paginate($this->totalPage);

       if($request->has('endereco'))

         $endereco= Product::where('endereco', 'like', '%'. $end. '%')
       ->orderBy('name', 'asc')->paginate($this->totalPage);

       if($request->has('religiao'))
        $rel= Product::where('religiao', '=',  $religiao)
      ->orderBy('name', 'asc')->paginate($this->totalPage);

      if($request->has('sexo'))
        $sexo= Product::where('sexo', '=',  $sex)
      ->orderBy('name', 'asc')->paginate($this->totalPage);



      if($request->has('formacao'))
        $form= Product::where('formacao', $formacao)
      ->orderBy('name', 'asc')->paginate($this->totalPage);

      if($request->has('lideranca'))
        $lid = Product::where('lideranca', '=', $lideranca)
      ->orderBy('name', 'asc')->paginate($this->totalPage);
      

      
      if($request->has('prioridade'))
        $pri = Product::where('lideranca', '=', $prioridade)
      ->orderBy('name', 'asc')->paginate($this->totalPage);




    //$aniv=Product::whereDay('date', '=', date('d'));
//dd($aniv);


      //$variaveis = array(;
      return view('resultado-relatorio', compact("consulta","endereco","rel","sexo",
        "form","lid","pri","aniv","dataForm"));
    }
  }
