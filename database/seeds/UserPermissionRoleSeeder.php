<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserPermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'CRUD semua']);
        Permission::create(['name' => 'CRUD Penilaian']);
        Permission::create(['name' => 'Read hasil']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'admin']);
        $role1->givePermissionTo('CRUD semua');

        $role2 = Role::create(['name' => 'juri']);
        $role2->givePermissionTo('CRUD Penilaian');    

        $role3 = Role::create(['name' => 'kepala']);
        $role3->givePermissionTo('Read hasil');
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);
        $user->assignRole($role1);

        $user = \App\User::create([
            'username' => 'juri',
            'email' => 'juri@gmail.com',
            'password' => bcrypt('juri')
        ]);
        $user->assignRole($role2);

        $user = \App\User::create([
            'username' => 'kepala',
            'email' => 'kepala@gmail.com',
            'password' => bcrypt('kepala')
        ]);
        $user->assignRole($role3);
    }
}
