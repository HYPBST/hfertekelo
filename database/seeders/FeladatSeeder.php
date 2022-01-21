<?php

namespace Database\Seeders;

use App\Models\Feladat;
use Illuminate\Database\Seeder;

class FeladatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Feladat::factory(10)->create();
    }
}
