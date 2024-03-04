<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarStoreRequest extends FormRequest
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
            
                "title"=> "required|max:20|min:2", 
                 "description"=>"required|string", 
                 "year"=> "required|max:4"
                  
            
        ];
    } 
     
    public function messages()
    {
        return [
             "title.required"=> "Campo obbloigatorio", 
             "title.max"=> "Titolo troppo lungo", 
             "title.min"=> "Titolo troppo corto",
             "description.required"=> "Campo obbligatorio",   
             "year.required"=> "Campo obbloigatorio", 
             "price.required"=> "Campo obbloigatorio",
            
            
        ]; 

    } 

}
