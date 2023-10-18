<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SelectStateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'state' => 'required'
        ];
    }
}
