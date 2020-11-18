<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Register\CreateUser;
use App\Validators\Register\CreateUserValidator;

class RegistrationController extends Controller
{
    private const USER_CREATE_SUCCESS = 'User %s created successfully!';

    private $createUser;
    private $createUserValidator;

    public function __construct(CreateUser $createUser, CreateUserValidator $createUserValidator)
    {
        $this->createUser           = $createUser;
        $this->createUserValidator  = $createUserValidator;
    }

    public function getView()
    {
        return view('guest.register.index');
    }

    public function registerUser(Request $request)
    {
        $data = [
            'name'                      => $request->input('name'),
            'email'                     => $request->input('email'),
            'password'                  => $request->input('password'),
            'password_confirmation'     => $request->input('password_confirmation'),
        ];

        if ($this->createUserValidator->setParameters($data)->fails())
            return redirect()->back()->with('errors', $this->createUserValidator->getErrors());

        $this->createUser
            ->name($data['name'])
            ->email($data['email'])
            ->password($data['password'])
            ->roles(['recruiter'])
            ->save();

        return redirect()->back()->with('success', sprintf(self::USER_CREATE_SUCCESS, $data['email']));
    }

}
