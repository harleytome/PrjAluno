<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassesRequest extends FormRequest
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
            "name" => "unique:classes|required|max:100",
            "teacher" => "required|max:150",
        ];
    }

    public function messages() {
        return [
            "name.unique" => "Nome do matéria já esta cadastrado",
            "name.required" => "Nome do matéria obrigatório",
            "teacher.required" => "Informe o nome do professor",
        ];

    }

}
