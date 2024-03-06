<?php

namespace Afranext\Crud\database\seeds;

use App\Models\User;
use Database\Seeders\Role;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #create developer user
        $developerUser = User::create([
            'name' => 'Developer',
            'email' => 'developer@afracode.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ]);

        #create super-admin role
        $superAdminRole = \Spatie\Permission\Models\Role::create(['name' => 'super-admin']);

        #assign super-admin to developer
        $developerUser->assignRole($superAdminRole);

    }
}
