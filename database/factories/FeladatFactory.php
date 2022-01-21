<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FeladatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nev'=>$this->faker->name(),
            'feladat_url'=>$this->faker->url(),
            'szoveges_ertekeles'=>NULL,
            'pontszam'=>NULL,
        ];
    }
}
