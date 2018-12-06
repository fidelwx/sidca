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
            'identity'          => ['required','min:6','max:9','unique:teachers'],
            'first_name'        => ['required','min:2','max:30'],
            'last_name'         => ['required','min:2','max:30'],
            'phone1'            => ['required','min:8','max:11'],
            'phone2'            => ['max:11'],
            'email1'            => ['required','min:6','max:50'],
            'email2'            => ['max:50'],
            'address'           => ['required','min:10','max:190'],
            'countrie_id'       => ['required'],
            'headquarters_id'   => ['required'],
            'classification_id' => ['required'],
            'status'            => ['required'],
            'birthdate'         => ['required'],
            'observation'       => ['max:190'],
        ];
    }

    public function messages()
    {
        return [
            'identity.required'             => 'El campo Cédula es requerido',
            'identity.min'                  => 'El campo Cédula debe contener al menos 6 caracteres.',
            'identity.max'                  => 'El campo Cédula debe contener máximo 9 caracteres.',
            'identity.unique'               => 'El campo Cédula ya ha sido registrado antes.',
            'first_name.required'           => 'El campo Nombres es obligatorio.',
            'first_name.min'                => 'El campo Nombres debe contener al menos 2 caracteres.',
            'first_name.max'                => 'El campo Nombres debe contener máximo 30 caracteres.',
            'last_name.required'            => 'El campo Apellidos es obligatorio.',
            'last_name.min'                 => 'El campo Apellidos debe contener al menos 2 caracteres.',
            'last_name.max'                 => 'El campo Apellidos debe contener máximo 30 caracteres.',
            'phone1.required'               => 'El campo Teléfono Móvil es obligatorio.',
            'phone1.min'                    => 'El campo Teléfono Móvil debe contener al menos 8 caracteres.',
            'phone2.max'                    => 'El campo Teléfono Casa debe contener máximo 11 caracteres.',
            'email1.required'               => 'El campo Correo Personal es obligatorio.',
            'email1.min'                    => 'El campo Correo Personal debe contener al menos 6 caracteres.',
            'email1.max'                    => 'El campo Correo Personal debe contener máximo 50 caracteres.',
            'address.required'              => 'El campo Dirección es obligatorio.',
            'address.min'                   => 'El campo Dirección debe contener al menos 10 caracteres.',
            'address.max'                   => 'El campo Dirección debe contener máximo 190 caracteres.',
            'countrie_id.required'          => 'El campo País es obligatorio.',
            'headquarters_id.required'      => 'El campo Sede es obligatorio.',
            'classification_id.required'    => 'El campo Clasificación es obligatorio.',
            'birthdate.required'            => 'El campo Fecha de Nacimiento es obligatorio.',
            'observation.max'               => 'El campo Observación debe contener máximo 190 caracteres.',
        ];
    }
}
