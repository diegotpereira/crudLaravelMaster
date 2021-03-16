<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipamentoFormRequest extends FormRequest
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
        if ($this->request->has("cancel")) {
            # code...
            return [];
        }
        return [
            //
            'tipo' => 'required',
            'modelo' => 'required|max:15',
            'fabricante' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'tipo.required' => 'O tipo do Equipamento deve ser preenchido!.',
            'modelo.required' => 'O modelo do equipamento deve ser preenchido!.',
            'modelo.max' => 'O campo modelo pode conter no máximo 15 caracteres',
            'fabricante.required' => 'O fabricante do equipamento deve ser preenchido!',
        ];
    }
}
