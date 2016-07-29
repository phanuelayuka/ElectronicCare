<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateDoctorRequest extends Request
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
            'ServiceNo'=>'required|min:5|numeric|unique:Doctors,ServiceNo',
            'FName'=>'required|min:5',
            'SName'=>'required|min:5',
            'NationalId'=>'required|digits:8|numeric',
            'ProfilePic'=>'required',
            'Email'=>'required|email',
            'Password'=>'required',
            'PasswordConfirmation'=>'required|same:Password'
            //
        ];
    }

    /**
     * @return array
     */
    
}
