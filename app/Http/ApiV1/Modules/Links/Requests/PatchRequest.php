<?php

namespace App\Http\ApiV1\Modules\Links\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatchRequest extends FormRequest
{

    public  function rules(): array
    {
        return [
            '0' => ['required', 'url']
        ];
    }

}
