<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PracticumRegistrationRequest extends FormRequest
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
            'college_student_id'    => ['required','numeric'],
            'pacticum_id'           => ['required','numeric'],
            'status_pembayaran'     => ['required','numeric'],
            'status'                => ['required','numeric']
        ];
    }
}
