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

    public function messages()
    {
        return [
            'title.required' => 'Nama harus di isi',
            'tgl_mulai.required' => 'Tanggal mulai harus di isi',
            'tgl_akhir.required' => 'Tanggal akhir harus di isi',
            'description.required' => 'Deskripsi harus di isi',
            'seat.required' => 'Jumlah kursi harus diisi',
            'foto.required' => 'Foto harus di isi',
            'author.required' => 'Pengisi workshop harus di isi',
            'location.required' => 'Lokasi harus di isi'
        ];
    }
}