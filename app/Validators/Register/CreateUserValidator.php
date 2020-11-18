<?php

namespace App\Validators\Register;

use App\Validators\BaseValidator;

class CreateUserValidator extends BaseValidator
{
    protected $parameters   = [];
    protected $rules        = [
        'name'      => 'required|max:50',
        'email'     => 'required|email|unique:users,email',
        'password'  => 'confirmed|min:8',
    ];
    protected $messages     = [
        'email.unique' => 'The email :input is already registered!'
    ];
}
