<?php

namespace Database\Factories;

use App\Models\Vendeur;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendeurFactory extends Factory
{
    protected $model = Vendeur::class;

    public function definition()
    {
        return [
            'cinv' => $this->faker->uuid,
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'ddn' => $this->faker->date,
            'adresse' => $this->faker->address,
            'tel' => $this->faker->phoneNumber,
        ];
    }
}
