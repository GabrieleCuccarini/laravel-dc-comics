<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest

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
            "title" => "required|min:5|max:255",
            "description" => "required|string",
            "price" => "required|decimal:0,2",
            "series" => "required|string",
            "type" => "string"
        ];
    }

    public function messages() {
        return [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" =>  "Il titolo deve avere almeno :min caratteri",
            "title.max" =>  "Il titolo deve avere massimo :max caratteri",
            "description.required" => "La descrizione è obbligatoria",
            "price.required" => "Il prezzo è obbligatorio",
            "price.decimal" => "Il prezzo può avere al massimo 2 decimali",
            "series.required" => "La serie è obbligatoria",
            "type.string" => "Il tipo è obbligatorio"
        ];
    }
}
