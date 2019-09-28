<?php

use App\User;
use App\Model\Like;
use App\Model\Category;
use App\Model\Builder;
use App\Model\Property;


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
        factory(User::class,10)->create();
        factory(Category::class,5)->create();
        factory(Builder::class,10)->create();
        factory(Property::class,50)->create();
        factory(Like::class,50)->create();
        //->each(function ($property) { return $property->like()->save(factory(Like::class)->make());
        //});
    }
}
