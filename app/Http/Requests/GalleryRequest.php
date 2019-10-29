<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'picture' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Nama harus di isi',
            'description.required' => 'Deskripsi harus di isi',
            'picture.required' => 'Foto harus di isi',
        ];
    }
}
