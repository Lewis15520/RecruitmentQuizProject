<?php

namespace App\Services\Authentication;

use App\Models\User;
use Auth;

class AuthenticateUser
{
    private $user;
    private $credentials;

    public function __construct()
    {
        $this->user = User::query();
    }

    public function setCredentials(array $credentials = []): self
    {
        $this->credentials = $credentials;
        return $this;
    }

    public function attempt(): bool
    {
        $rememberMe = $this->credentials['remember_me'];
        unset($this->credentials['remember_me']);
        return (Auth::attempt($this->credentials, $rememberMe))? true: false;
    }
}
