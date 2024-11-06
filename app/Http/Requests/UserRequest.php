<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Role;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'status' => ['required'],
            'role'=> ['required','in:ADMIN,SUPER ADMIN']
        ];
        if ($this->route()->named('users.update')) {
            $rules['password'] = [];
            if ($this->input('password')) { // Cek jika password diisi
                $rules['password'] = ['string', 'min:8', 'confirmed']; // Validasi jika password ada
            }
            if ($this->input('password')) { // Cek jika password diisi
                $rules['password'] = ['string', 'min:8', 'confirmed']; // Validasi jika password ada
            }
            if($this->input('email')){
                $rules['email'] = ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->user->id)];
            }
        }
        return $rules;
    }
    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',

            'email.required' => 'The email field is required.',
            'email.string' => 'The email must be a string.',
            'email.email' => 'The email must be a valid email address.',
            'email.max' => 'The email may not be greater than 255 characters.',
            'email.unique' => 'The email has already been taken.',

            'password.required' => 'The password field is required.',
            'password.string' => 'The password must be a string.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.confirmed' => 'The password confirmation does not match.',

            'status.required' => 'The status field is required.',

            'role.required' => 'The role field is required.',
            'role.in' => 'The selected role is invalid. It must be either ADMIN or SUPER ADMIN.',
        ];
    }
}
