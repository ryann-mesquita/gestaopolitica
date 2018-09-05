<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
      // 'email' => 'required|email|min:5|max:100',
         'date' => 'required|date|min:6|max:100',
         'sexo' => 'required',
        // 'cep'  => 'required|digits:8',
         'cidade' => 'required|min:3|max:50',
         'endereco' => 'required|min:3|max:100',
       //  'complemento' => 'min:3|max:100',
        // 'bairro' => 'required|min:3|max:100',
         'numero' => 'required|numeric',
         //'numero' => '|min:8|max:15',
         //'religiao' => 'required|min:3|max:100',
         //'category' =>'required',
        // 'formacao' => 'required',
         'lideranca' => 'required',
         'localidade' => 'required',
         'prioridade' => 'required',
         //'nfilhos' => 'present',
        'telefone' => 'required|numeric',
         



        // 'description' =>'min:3|max:100',

    ];
            //
       
    }
    public function messages()
    {
        return [
                'name.required' => "O campo nome é de preenchimento obrigatório",
                'number.numeric' => 'Precisa ser apenas números',
                'number.required' => 'O campo número é de preechimento obrigatório',
                ];
    }
}
