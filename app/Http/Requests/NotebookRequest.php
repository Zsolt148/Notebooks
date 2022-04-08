<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotebookRequest extends FormRequest
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
            'manufacturer'      => ['required', 'string', 'max:255'],
            'type'              => ['required', 'string', 'max:255'],
            'display'           => ['required', 'string', 'max:255'],
            'memory'            => ['required', 'numeric'],
            'harddisk'          => ['required', 'numeric'],
            'videocontroller'   => ['required', 'string', 'max:255'],
            'price'             => ['required', 'numeric'],
            'processor_id'      => ['required'],
            'opsystem_id'       => ['required'],
            'pieces'            => ['required', 'numeric']
        ];
    }
}
