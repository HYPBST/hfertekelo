<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeladatRequest extends FormRequest
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
            'nev' => 'required|string|max:255',
            'feladat_url' => 'required|string',
            'szoveges_ertekeles' => 'required|string',
            'pontszam'=> 'required|numeric|integer|min:0|max:100'
        ];
    }
}
