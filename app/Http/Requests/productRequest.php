<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Titre' => 'bail|required|between:5,20|alpha',
            'Type' => 'bail|required|filled',
            'Categorie' => 'bail|required',
            'Etiquette' => 'bail|required',
            'Image' => 'bail|required|',
            'Texte' => 'bail|required|max:250|filled'
        ];
    }
}
