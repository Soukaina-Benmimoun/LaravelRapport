<?php

namespace Database\Factories;

use App\Models\Cabinet;
use Illuminate\Database\Eloquent\Factories\Factory;

class CabinetFactory extends Factory
{
    protected $model = Cabinet::class;

    public function definition()
    {
        return [
            'id_cab' => $this->faker->uuid,
            'nom' => $this->faker->company,
            'adresse' => $this->faker->address,
            'tel' => $this->faker->phoneNumber,
            'ville' => $this->faker->city,
        ];
    }
}
