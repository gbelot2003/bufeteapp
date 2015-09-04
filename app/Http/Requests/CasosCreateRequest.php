<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CasosCreateRequest extends Request
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
            'caso' => 'string|required|unique:casos',
			'cliente_id' => 'integer|required',
			'tipocaso_id' => 'integer|required',  //contexto
			'tipojuicio' => 'string|required',
			'tribunal_id' => 'integer|required',
			'instancia' => 'string|required',
			'salas' => 'string|required',
			'juez_id' => 'integer|required',
			'ca'	=> 'string',
			'csj'	=> 'string',
			'honorarios' => 'string',
			'descripcion' => 'string|required' // parte de actualización
        ];
    }
}
