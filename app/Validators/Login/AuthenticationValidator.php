<?php

namespace App\Validators\Login;

use App\Validators\BaseValidator;

class AuthenticationValidator extends BaseValidator
{
    protected $parameters   = [];
    protected $rules        = [
        'email'     => 'required|email|exists:users,email',
        'password'  => 'required|min:8',
    ];
    protected $messages     = [];
}
