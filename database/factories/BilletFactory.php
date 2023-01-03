<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Billet>
 */
class BilletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'BIL_DATE' => now(),
            'BIL_TITRE' => fake()->text(50),
            'BIL_CONTENU' => fake()->text(200),
        ];
    }
}
