<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipantGetRequest extends FormRequest
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

    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'picture' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tema harus di isi',
            'description.required'  => 'Deskripsi harus di isi',
            'picture.required'  => 'Foto harus di pilih',
        ];
    }

}
