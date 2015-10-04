<?php namespace App\Http\Requests\Auth;
 
use Illuminate\Foundation\Http\FormRequest;
 
class RegisterRequest extends FormRequest {
 
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6',
            'full_name' => 'required',
            'faculty' => 'required',
            'hour_level' => 'required',
        ];
    }
 
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
 
}