<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroRequest extends FormRequest
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
            'name' => 'required',
            'full_name' => 'required',
            'gender' => 'required',
            'place_of_birth' => 'required',
            'alignment' => 'required',
            'first_appearance' => 'required',
            'publisher' => 'required',
            'alter_egos' => 'max:255',
            'intelligence' => 'required|integer|min:0|max:100',
            'strength' => 'required|integer|min:0|max:100',
            'speed' => 'required|integer|min:0|max:100',
            'durability' => 'required|integer|min:0|max:100',
            'power' => 'required|integer|min:0|max:100',
            'combat' => 'required|integer|min:0|max:100',
            'eye_color' => 'max:255',
            'hair-color' => 'max:255',
            'height.cm' => 'required|integer|min:1',
            'height.ft' => 'required|integer|min:1',
            'weight.kg' => 'required|integer|min:1',
            'weight.lb' => 'required|integer|min:1',
            'occupation' => 'max:255',
            'alias' => 'max:255',
            'base' => 'max:255',
            'group_affiliation' => 'max:255',
            'relatives' => 'max:255',
            'image' => 'required|image'
        ];
    }
}
