<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterWorkshopRequest extends FormRequest
{

    // public function authorize()
    // {
    //     return false;
    // }


    public function rules()
    {
        return [
            'nama' => 'required',
            'email' => 'required|email',
            'nomor' => 'required'
        ];
    }
}
