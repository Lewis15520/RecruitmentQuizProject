<?php

namespace App\Validators;

use Illuminate\Support\Facades\Validator;

class BaseValidator
{
    protected $parameters   = [];
    protected $rules        = [];
    protected $messages     = [];

    private $validator;

    public function __construct()
    {
        $this->validator = Validator::class;
    }

    public function setParameters(array $parameters = []): self
    {
        $this->parameters = array_merge($this->parameters, $parameters);
        return $this;
    }

    public function fails(): bool
    {
        $this->validate();
        return $this->validator->fails();
    }

    public function getErrors()
    {
        return $this->validator->errors()->toArray();
    }

    private function validate()
    {
        $this->validator = $this->validator::make(
            $this->parameters,
            $this->rules,
            $this->messages
        );
    }
}
