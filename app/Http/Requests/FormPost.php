<?php

namespace App\Http\Requests;

use App\Contacts;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FormPost extends FormRequest
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
            'name' => 'required',
            'email' => [
                'required', 'email', Rule::unique((new Contacts)->getTable())->ignore($this->route()->Contacts->id ?? null)
            ],
            'driver’s_license' => 'required',
            'phone' => [
                'required', Rule::unique((new Contacts)->getTable())->ignore($this->route()->Contacts->id ?? null)
            ],
        ];
    }
}
