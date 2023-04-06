<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VentesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => '',
            'titre' => $this->faker->sentence(),
            'etiquettes' => 'patates,pommes,carottes',
            'vendeur' => $this->faker->company(),
            'debut_vente' => $this->faker->dateTime(),
            'fin_vente' => $this->faker->dateTime(),
            'localisation' => $this->faker->city(),
            'email' => $this->faker->companyEmail(),
            'telephone' => $this->faker->phoneNumber(),
            'site_web' => $this->faker->url(),
            'description' => $this->faker->paragraph(5)
        ];
    }
}
