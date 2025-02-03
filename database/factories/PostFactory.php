<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(), // Genera un título aleatorio
            'description' => $this->faker->paragraph(), // Descripción corta
            'category' => $this->faker->word(), // Una categoría aleatoria
            'content' => $this->faker->text(1000), // Contenido más extenso
        ];
    }
}
