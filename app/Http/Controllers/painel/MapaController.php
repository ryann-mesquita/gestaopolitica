<?php

namespace App\Http\Controllers\painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Painel\Product;
use Gate;
class MapaController extends Controller
{

    private $Nomes=[];    
    private $product; // Atributo
    private $totalPage=10;
    public function __construct(Product $product) // D.I externa para usar em todos os métodos
    {
        $this->middleware('auth');
        $this->product = $product; // Passando o Objeto para o produto
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies('edit_post'))
        abort(403, 'Acesso não permitido para seu perfil de login!');
       //  return view('mapa');
              $produtos = Product::all();
        
        $guajara= Product::where('localidade', 'like', '%guajara%')
        ->count();
        $curuçamba= Product::where('localidade', 'like', '%curuçamba%')
        ->count();
        $horas= Product::where('localidade', 'like', '%40 horas%')
        ->count();
        $jiboia_branca= Product::where('localidade', 'like', '%jiboia branca%')
        ->count();
        $coqueiro= Product::where('localidade', 'like', '%coqueiro%')
        ->count();
        $cidade_nova= Product::where('localidade', 'like', '%cidade nova%')
        ->count();
        $maguari= Product::where('localidade', 'like', '%maguari%')
        ->count();
        $heliolandia= Product::where('localidade', 'like', '%heliolandia%')
        ->count();
        $distrito_industrial= Product::where('localidade', 'like', '%distrito industrial%')
        ->count();
        $geraldo_palmeira= Product::where('localidade', 'like', '%geraldo palmeira%')
        ->count();
        $centro= Product::where('localidade', 'like', '%centro%')
        ->count();
        $levilandia= Product::where('localidade', 'like', '%levilandia%')
        ->count();
        $jaderlandia= Product::where('localidade', 'like', '%jaderlandia%')
        ->count();
        $atalaia= Product::where('localidade', 'like', '%atalaia%')
        ->count();
        $guanabara= Product::where('localidade', 'like', '%guanabara%')
        ->count();
        $aguas_lindas= Product::where('localidade', 'like', '%aguas lindas%')
        ->count();
        $julia_seffer= Product::where('localidade', 'like', '%julia seffer%')
        ->count();
        $aguas_brancas= Product::where('localidade', 'like', '%aguas brancas%')
        ->count();
        $aura= Product::where('localidade', 'like', '%aura%')
        ->count();
        $paar= Product::where('localidade', 'like', '%paar%')
        ->count();
        $icui= Product::where('localidade', 'like', '%icui%')
        ->count();



        
        
        return view('mapa', compact("guajara","curuçamba","horas","jiboia_branca","coqueiro",
            "cidade_nova","maguari","heliolandia","distrito_industrial","geraldo_palmeira",
            "centro","levilandia","jaderlandia","atalaia","guanabara",
            "aguas_lindas","julia_seffer","aguas_brancas","aura","paar","icui"));
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
}
