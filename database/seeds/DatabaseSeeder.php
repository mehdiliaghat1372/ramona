<?php

use App\Models\Category;
use App\Models\Role;
use App\Models\Slide;
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
        $this->createSomeSlides();
    }

    public function createAdminUser()
    {
        $role = new Role();
        $role->title = trans('general.admin');
        $role->save();

        $user = new User();
        $user->first_name = 'Admin';
        $user->last_name = 'Admin';
        $user->email = env('ADMIN_DEFAULT_USERNAME', 'email@domain.com');
        $user->password = Hash::make(env('ADMIN_DEFAULT_PASSWORD', 'password'));
        $user->save();

        $user->roles()->save($role);

        echo 'Admin email: ', $user->email, PHP_EOL;
        echo 'Admin password: ', env('ADMIN_DEFAULT_PASSWORD', 'password'), PHP_EOL;
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

    public function createSomeSlides()
    {
        factory(Slide::class)->create([
            'image' => asset('demo/slide1.jpg'),
        ]);

        factory(Slide::class)->create([
            'image' => asset('demo/slide2.jpg'),
        ]);

        factory(Slide::class)->create([
            'image' => asset('demo/slide3.jpg'),
        ]);
    }
}
