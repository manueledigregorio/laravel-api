<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' =>'required|min:3|max:100',
            'description' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Devi inserire il nome',
            'name.max'=> 'Il nome del deve avere massimo :max caratteri',
            'description.required'=>'Devi inserire la descrizione del comics',
            'description.min' => 'La descrizione deve avere minimo :min caratteri',

        ];
    }


}
