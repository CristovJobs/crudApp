<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreValid extends FormRequest
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

        $rules = [
            //my rules

            'titulo' => 'required',
            'conteudo' => ['nullable'],
            'tags' => ['required'],
            'image' => ['required', 'image']
         ];

         if($this->method() == 'PUT'){

            $rules['image'] =  ['required', 'image'];

         }
         return $rules;
    }
}
