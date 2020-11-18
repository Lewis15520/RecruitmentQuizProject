<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Authentication\AuthenticateUser;
use App\Validators\Login\AuthenticationValidator;
use Auth;

class AuthenticationController extends Controller
{
    private const FAILED_LOGIN = 'Incorrect credentials provided!';

    private $authenticateUser;
    private $authenticationValidator;

    public function __construct(AuthenticateUser $authenticateUser, AuthenticationValidator $authenticationValidator)
    {
        $this->authenticateUser         = $authenticateUser;
        $this->authenticationValidator  = $authenticationValidator;
    }

    public function getView()
    {
        return view('guest.login.index');
    }

    public function authenticateUser(Request $request)
    {
        $data = [
          'email'       => $request->input('email'),
          'password'    => $request->input('password'),
          'remember_me' => $request->input('remember_me', false),
        ];

        if ($this->authenticationValidator->setParameters($data)->fails())
            return redirect()->back()->with('errors', $this->authenticationValidator->getErrors());

        $this->authenticateUser->setCredentials($data);
        if ($this->authenticateUser->attempt())
            return redirect()->intended('/');
        return redirect()->back()->with('errors', [0 => [self::FAILED_LOGIN]]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.get');
    }
}
