<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'administrator' => 'administrator',
            'lecturer' => 'lecturer',
            'student' => 'student'
        ];

        foreach ($roles as $key => $role) {
            $roles[$key] = Role::create(['name' => $role]);
        }

        $permissions = [
            'view.roles',
            'edit.roles',
            'update.roles',
            'show.roles',
            'create.roles',
            'store.roles',
            'delete.roles',
            'hard_delete.roles',
            'view.users',
            'edit.users',
            'update.users',
            'show.users',
            'create.users',
            'store.users',
            'delete.users',
            'hard_delete.users',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
            /**
             * @var Role[]|string[] $roles
             */
            $roles['administrator']->givePermissionTo($permission);
        }

    }
}
