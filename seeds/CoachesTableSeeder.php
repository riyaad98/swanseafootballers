<?php

use Illuminate\Database\Seeder;
use App\Coach;

class CoachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Coach::class, 5)->create();
    }
}
