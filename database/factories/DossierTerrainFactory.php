<?php

namespace Database\Factories;

use App\Models\DossierTerrain;
use App\Models\Terrain;
use App\Models\Notaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class DossierTerrainFactory extends Factory
{
    protected $model = DossierTerrain::class;

    public function definition()
    {
        return [
            'iddossier' => $this->faker->uuid,
            'date_ouverture' => $this->faker->date,
            'date_cloture' => $this->faker->date,
            'numter' => Terrain::factory(),
            'numnotaire' => Notaire::factory(),
            'etat' => $this->faker->randomElement(['traité', 'nontraité']),
        ];
    }
}
