<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentaire>
 */
class CommentaireFactory extends Factory
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
            'COM_DATE' => now(),
            'COM_AUTEUR' => fake()->lastName(),
            'COM_CONTENU' => fake()->text(200),
            'billet_id' => fake()->numberBetween(1,10),
        ];
    }
}
