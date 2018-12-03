<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'identity'          => 'required|min:6|max:9|unique:teachers',
            'first_name'        => 'required|min:2|max:30|string',
            'last_name'         => 'required|min:2|string',
            'phone1'            => 'required|min:8|max:11',
            'phone2'            => 'min:8|max:11',
            'email1'            => 'required|min:9|max:30',
            'email2'            => 'min:9|max:30',
            'address'           => 'required|min:10|max:190',
            'countrie_id'       => 'required',
            'headquarters_id'   => 'required',
            'classification_id' => 'required',
            'status'            => 'required',
            'birthdate'         => 'required',
            'observation'       => 'max:190',
        ];
    }
}
