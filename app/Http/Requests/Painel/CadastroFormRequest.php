<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class CadastroFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

         'name' => 'required|min:3|max:100',
         'endereco' => 'required|min:3|max:100',
      // 'email' => 'required|email|min:5|max:100',
         'date' => 'required|date|min:6|max:100',
         
        // 'cep'  => 'required|digits:8',
         'cidade' => 'required|min:3|max:50',
         'numero' => 'required|numeric',
       //  'complemento' => 'min:3|max:100',
         'bairro' => 'required|min:3|max:100',
         'nomedamae'=>'required|min:3|max:100',
         'titulo' => 'required|unique:cadastros|digits:12',
         'lider'=> 'required|min:3|max:100',
         'zona' => 'required|digits:4',
         'secao' => 'required|digits:4',
         //'numero' => '|min:8|max:15',
         //'religiao' => 'required|min:3|max:100',
         //'category' =>'required',
        // 'formacao' => 'required',

         



    ];
            //
       
    }
    public function messages()
    {
        return [
                'date.required' => "O campo data é de preenchimento obrigatório",
                'name.required' => "O campo nome é de preenchimento obrigatório",
                'endereco.required' => "O campo endereço é de preenchimento obrigatório",
                'cidade.required' => "O campo cidade é de preenchimento obrigatório",
                'numero.required' => "O campo numero é de preenchimento obrigatório",
                'bairro.required' => "O campo bairro é de preenchimento obrigatório",
                'nomedamae.required' => "O campo endereço é de preenchimento obrigatório",
                'lider.required' => "O campo lider é de preenchimento obrigatório",
                'zona.required' => "O campo zona é de preenchimento obrigatório",
                'secao.required' => "O campo seção é de preenchimento obrigatório",
                'titulo.required' => "O campo titulo é de preenchimento obrigatório",
                'titulo.digits' => 'O titulo dever ter 12 digitos',
                'titulo.unique' => 'Titulo já cadastrado',
                'secao.digits' => 'O campo Seção dever ter 4 digitos',
                'zona.digits' => 'O campo Zona dever ter 4 digitos',
                'number.required' => 'O campo número é de preechimento obrigatório',
                ];
    }
}
