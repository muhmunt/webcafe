<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkshopRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
            'description' => 'required',
            'seat' => 'required',
            'foto' => 'required',
            'author' => 'required',
            'location' => 'required',
        ];
    }
}
