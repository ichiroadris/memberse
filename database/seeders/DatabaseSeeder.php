<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => "ichiro",
            'email' => "ichiro@test.com"
        ]);

        $role = Role::create(['name' => 'admin']);
        Role::create(['name' => 'free']);
        Role::create(['name' => 'silver']);
        Role::create(['name' => 'gold']);

        $permission = Permission::create(['name' => 'super']);

        $role->givePermissionTo($permission);
        $user->assignRole('admin');

        // \App\Models\User::factory(10)->create();
    }
}
