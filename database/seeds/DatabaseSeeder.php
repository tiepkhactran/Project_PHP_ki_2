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
        //1.Lan 1
        $this->call(MemberTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(DonaterTableSeeder::class);
//        $this->call(CustomerTableSeeder::class);
//        $this->call(ProducerTableSeeder::class);
//        $this->call(CategoryTableSeeder::class);

        //2.lan 2
//        $this->call(ProductTableSeeder::class);
    }
}
