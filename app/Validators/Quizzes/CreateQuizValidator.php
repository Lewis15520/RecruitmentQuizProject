<?php

namespace App\Validators\Quizzes;

use App\Validators\BaseValidator;

class CreateQuizValidator extends BaseValidator
{
    protected $parameters   = [];
    protected $rules        = [
        'name'      => 'required|max:50|min:8|unique:quizzes,name',
        'content'   => 'required|json'
    ];
    protected $messages     = [];
}
