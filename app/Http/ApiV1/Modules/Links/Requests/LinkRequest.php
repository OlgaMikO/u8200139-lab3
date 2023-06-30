<?php

namespace App\Http\ApiV1\Modules\Links\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkRequest extends FormRequest
{

    public  function rules(): array
    {
        return [
            'chat_id' => ['integer', 'gte:0'],
            'url' => ['required', 'url']
        ];
    }

}
