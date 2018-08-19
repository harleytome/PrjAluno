<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudantsRequest extends FormRequest
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
            "id_school" => "required",
            "birthdate" => "required",
            "class_name" => "required|max:2",
            "current_year" => "required|max:4",
            "email" => "required|email",
        ];
    }

    public function messages() {
        return [
           'id_school.required' => 'Informe a sua escola',
           'birthdate.required' => 'Data de nascimento é obrigatório',
           'class_name.required' => 'Campo obrigatório',
           'current_year.required' => 'Campo obrigatório',
           'current_year.max' => 'Informe apenas 4 digitos',
           'email.required' => 'Você precisa informar um email',
        ];

    }

}
