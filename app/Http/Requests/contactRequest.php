<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
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
            "name" => 'required|min:5|max:200',
            "email" => ['required', 'min:5'],
            "message" => 'required|max:200',
            "image" => 'required'
        ];
    }

    public function messages()
    {
        return [
            "required" => ":attribute wajib diisi ",
            "min" => "isi :attribute minimal 5 ",
            "max" => "isi :attribute diisi maksimal 200 karakter"
        ];
    }
}
