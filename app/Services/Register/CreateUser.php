<?php

namespace App\Services\Register;

use App\Models\User;
use Lewis15520\Lararoles\app\Models\Role;

class CreateUser
{
    private $user;
    private $roles;

    public function __construct()
    {
        $this->user     = new User;
        $this->roles    = [];
    }

    public function name(string $name): self
    {
        $this->user->name = $name;
        return $this;
    }

    public function email(string $email): self
    {
        $this->user->email = $email;
        return $this;
    }

    public function password(string $password): self
    {
        $this->user->password = bcrypt($password);
        return $this;
    }

    public function roles(array $roles = []): self
    {
        foreach ($roles as $role) {
            $this->roles[] = Role::where('name', $role)->value('id');
        }
        return $this;
    }

    public function save()
    {
        $this->user->save();
        $this->assignRoles();
    }

    private function assignRoles()
    {
        $this->user->roles()->attach($this->roles);
    }
}
