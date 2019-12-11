<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create the admin role
        $role = Role::whereSlug('admin')->firstOrCreate([
            'slug' => 'admin'
        ]);

        // Create an admin user
        /** @var User $user */
        $user = factory(User::class)->create();
        $user->roles()->save($role);

        // Write out the admin user info
        echo 'Admin email: ', $user->email, PHP_EOL;
        echo 'Admin password: ', 'password', PHP_EOL;
    }
}
