<?php

namespace Database\Factories;

use App\Models\Notaire;
use App\Models\Cabinet;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotaireFactory extends Factory
{
    protected $model = Notaire::class;

    public function definition()
    {
        return [
            'num' => $this->faker->uuid,
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'age' => $this->faker->numberBetween(30, 60),
            'tel' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'id_cab' => 'test1',
        ];
    }
}
