<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $uniqueEmail = 'unique:App\Models\User,email';

        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $uniqueEmail = $uniqueEmail . ',' . $this->route('user')->id;
        }

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', $uniqueEmail],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
}
