<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Painel\Product;
use App\Http\Requests\Painel\ProductFormRequest;
use Auth;
use Gate;

class ProdutoController extends Controller
{
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
       if(Gate::denies('adm'))
          abort(403, 'Acesso não permitido para seu perfil de login!');
        $title = 'Listagem dos Produtos';
        $products =  $this->product->orderBy('name', 'asc')->paginate($this->totalPage);

    
        return view('dashboard', compact('products', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //$categorys= ['eletronicos', 'moveis', 'limpeza','banho'];
      return view('create-edit', compact('title','categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( ProductFormRequest $request)
    {
        // Pega todos os dados do form
       
       $dataForm = $request->all();
       $products = Product::all();
       $user_id = Auth::user()->id;

       $products = new Product;
      $products->name=$request->name;
       $products->email=$request->email;
       $products->date=$request->date;
       $products->sexo=$request->sexo;
       $products->cep=$request->cep;
       $products->cidade=$request->cidade;
       $products->endereco=$request->endereco;
       $products->complemento=$request->complemento;
       $products->bairro=$request->bairro;
       $products->numero=$request->numero;
       $products->religiao=$request->religiao;
       $products->formacao=$request->formacao;
       $products->lideranca=$request->lideranca;
       $products->prioridade=$request->prioridade;
       $products->nfilhos=$request->nfilhos;
       $products->telefone=$request->telefone;
       $products->whatsapp=$request->whatsapp;
       $products->description=$request->description;
       $products->localidade=$request->localidade;
       $products->lider=$request->lider;
       $products->user_id = $user_id;
       
       //$dataForm['active'] = (!isset( $dataForm['active']) )?0 :1;
     
        //Valida os Dados

      /* $this->validate($request, $this->product->rules,$messages);
     
       */
      
    // dd($products);
      
      

        //Faz o Cadastro

       // $insert =  $this->product->create($dataForm);
          $insert = $products->save();

        if($insert)
        return redirect()
        ->route('dashboard.index')
        ->with('success', 'Cadastro Inserido com Sucesso!');
        else
            return redirect()
        ->route('dashboard.create')
        ->with('error', 'Falha ao inserir');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Gate::denies('adm'))
        abort(403, 'Acesso não permitido para seu perfil de login!');
        $product = $this->product->find($id);
        $title = "Produto: {$product->name}";
        return view('dashboard-show', compact('product', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      if(Gate::denies('adm'))
     abort(403, 'Acesso não permitido para seu perfil de login');
// $selectOptions= product::pluck('id','name');
    
        //Recupera o produto por seu id
      $product = $this->product->find($id);
      
     
      // $escolha=$product->pluck('formacao','id')->all();

      //$selectOptions= $product->formacao;
      $title = "Editar Produto: {$product->name}"; 
      //$categorys= ['eletronicos', 'moveis', 'limpeza','banho'];

                
 return view('edit-Form', compact('title','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, $id)
    {
            if(Gate::denies('adm'))
          abort(403, 'Acesso não permitido para seu perfil de login!');
            //Recupera todos os dados do formulário
            $dataForm = $request->all();
            //Recupera o item para editar
            $product = $this->product->find($id);
            //Verifica se o produto ta ativado
           // $dataForm['active'] = (!isset( $dataForm['active']) )?0 :1;
            //Altera os itens
            $update = $product->update($dataForm);
            //Verifica se realmente editou
            
            if($update)

                return redirect()
              ->route('dashboard.index')
              ->with('success', 'Cadastro Editado com Sucesso!');
            else
                return redirect()->route('dashboard.edit',$id)->with(['errors' => 'Falha ao editar']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::denies('adm'))
        abort(403, 'Acesso não permitido para seu perfil de login'); 
        $product = $this->product->find($id);

        
        $delete = $product->delete();

        
        if($delete)

            return redirect()
          ->route('dashboard.index')
          ->with('success', 'Cadastro deletado com Sucesso!');
        else
            return redirect()->route('dashboard.show', $id)->with(['errors' => 'Falha ao Deletar']);
    }
    public function tests()
    {
      
        /*$insert =  $this->product->create([
            'name'       => 'Nome do Produto 2',
            'number'     => 12345,
            'active'     => false,
            'category'   => 'eletronicos',
            'description'=> 'Descrição vem aqui',
            ]);
      if($insert)
        return "Inserido com Sucesso ID: {$insert->id}";
      else 
        return 'Falha ao Inserir'; Método de Inserir*/
       /*
       $prod= $this->product->find(6);//Retorna o produto pelo ID
      // dd($prod->name); Método para debugar, dar um var_dump e mata o conteúdo pra baixo
       $update=$prod->update([
            'name'       => 'Update teste',
            'number'     => 33333,
            'active'     => false,
            'description'=> 'Descrição teste',
            ]);
        if($update)
            return 'Atualizado com Sucesso!';
        else
            return 'Falha ao Alterar'; Método de atualizar*/
       $prod = $this->product->find(3);
       $delete = $prod->delete();

       if($delete)
            return 'Deletado com Sucesso';
        else
            return 'Falha ao Deletar';

    }
      public function profile($id)
    {
      $product = $this->product->find($id);
        return view('profile',compact('product'));
    }

      
}


