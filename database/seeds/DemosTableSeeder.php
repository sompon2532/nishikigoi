<?php

use Illuminate\Database\Seeder;
use App\Models\Demo;

class DemosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10000; $i++) {
            Demo::create([
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com'
            ]);
        }
    }
}
