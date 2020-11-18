<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lewis15520\Lararoles\app\Models\Role;

class DefaultRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $roleData) {
            if (!Role::where('name', $roleData[0])->exists()) {
                $role               = new Role;
                $role->name         = $roleData[0];
                $role->display_name = $roleData[1];
                $role->description  = $roleData[2];
                $role->save();
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
              'admin',
              'Administrator',
              'Administrator of the system',
          ],
          [
              'recruiter',
              'Recruiter',
              'Recruiter'
          ],
          [
              'candidate',
              'Candidate',
              'Candidate',
          ],
        ];
    }
}
