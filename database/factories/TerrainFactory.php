<?php

namespace Database\Factories;

use App\Models\Terrain;
use App\Models\Vendeur;
use Illuminate\Database\Eloquent\Factories\Factory;

class TerrainFactory extends Factory
{
    protected $model = Terrain::class;

    public function definition()
    {
        return [
            'numter' => $this->faker->uuid,
            'typeTerrain' => $this->faker->randomElement(['Terrain agricole', 'terrain en lotissement']),
            'prixvente' => $this->faker->randomFloat(2, 10000, 1000000),
            'cinv' => Vendeur::factory(),
            'titre_foncier' => $this->faker->word,
            'adresse' => $this->faker->address,
            'ville' => $this->faker->city,
            'superficie' => $this->faker->randomFloat(2, 100, 10000),
        ];
    }
}

