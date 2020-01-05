<?php

use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use App\Models\Video;
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
        $this->createAdminUser();
        $this->createSomeCategories();
        $this->createSomeVideos();
    }

    public function createAdminUser()
    {
        $role = new Role();
        $role->title = trans('general.admin');
        $role->save();

        $user = new User();
        $user->first_name = 'Admin';
        $user->last_name = 'Admin';
        $user->email = 'admin@admin.admin';
        $user->password = Hash::make('password');
        $user->save();

        $user->roles()->save($role);

        echo 'Admin email: ', $user->email, PHP_EOL;
        echo 'Admin password: ', 'password', PHP_EOL;
    }

    public function createSomeCategories()
    {
        factory(Category::class)->create([
            'title' => 'جنایی',
            'description' => 'فیلم های جنایی',
        ]);

        factory(Category::class)->create([
            'title' => 'کمدی',
            'description' => 'فیلم های کمدی',
        ]);
    }

    public function createSomeVideos()
    {
        $attributes = [
            'author_id' => 1,
            'content' => 'درباره ویدئو',
            'url' => asset('demo/v1.mp4'),
        ];

        /** @var Video[] $v */

        $v[1] = factory(Video::class)->create(array_merge($attributes, [
            'thumbnail' => asset('demo/m1.jpg'),
        ]));
        $v[1]->categories()->attach(1);

        $v[2] = factory(Video::class)->create(array_merge($attributes, [
            'thumbnail' => asset('demo/m2.jpg'),
        ]));
        $v[2]->categories()->attach(1);

        $v[3] = factory(Video::class)->create(array_merge($attributes, [
            'thumbnail' => asset('demo/m3.jpg'),
        ]));
        $v[3]->categories()->attach(2);

        $v[4] = factory(Video::class)->create(array_merge($attributes, [
            'thumbnail' => asset('demo/m4.jpg'),
        ]));
        $v[4]->categories()->attach(2);
    }
}
