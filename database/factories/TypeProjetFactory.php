<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type_projet>
 */
class TypeProjetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $domaine = ['Commercial', 'RH', 'Industriel','Marketing','Audio visuel','Agricol','Technologie','Santé'];
        return [
            //
            'libelle' => fake()->name(),
            'domaine'=>fake()->randomElement($domaine)
        ];
    }
}
