<?php

use Illuminate\Database\Seeder;
use App\Hero;

class HeroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Hero::Class, 5)->create();
    }
}
