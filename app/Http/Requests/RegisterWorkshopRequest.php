<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterWorkshopRequest extends FormRequest
{

    public function authorize()
    {
        return true;


    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama harus di isi',
            'email.required'  => 'Email harus di isi',
            'email.email'  => 'Format harus email',
            'email.unique'  => 'Email sudah terdaftar',
            'nomor.required'  => 'Nomer telpon harus di isi',
            'nomor.numeric'  => 'Format harus angka',
            'nomor.phone'  => 'Format nomor harus benar',
            'size_chart.required'  => 'Size baju harus di isi',
        ];
    }

    public function rules()
    {
        return [
            'nama' => 'required',
            'email' => 'required|email|unique:register_workshops,email',
            'nomor' => 'required|numeric|phone:ID',
            'size_chart' => 'required'
        ];
    }


}
