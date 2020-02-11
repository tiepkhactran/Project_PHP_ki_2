<?php


use Illuminate\Database\Seeder;

class DonaterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Donate::class,100)->create();
    }
}
