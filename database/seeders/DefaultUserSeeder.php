<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lewis15520\Lararoles\app\Models\Role;
use App\Models\User;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $userData) {
            if (!User::where('email', $userData[1])->exists()) {

                $user           = new User;
                $user->name     = $userData[0];
                $user->email    = $userData[1];
                $user->password = bcrypt($userData[2]);
                $user->save();

                foreach ($userData['roles'] as $role) {

                    $roleId = Role::where('name', $role)->value('id');
                    $user->roles()->attach($roleId);

                }
            }
        }
    }

    /**
     * Return seeder data
     *
     * @return array
     */
    public function data(): array
    {
        return [
            [
                'Lewis Hayter',
                'lewis.hayter@example.com',
                'password123',
                'roles' => [
                    'admin'
                ],
            ],
        ];
    }
}
