<?php

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
        //  $this->call{[
        //      PostTableSeeder::class,
        //      SiswaSeeder::class
        //  ]};
    factory(App\Tabungan::class, 100)->create();
    factory(App\Customer::class, 100)->create();


    }
}
