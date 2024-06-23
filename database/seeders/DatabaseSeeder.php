<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cabinet;
use App\Models\Notaire;
use App\Models\DossierTerrain;
use App\Models\Vendeur;
use App\Models\Terrain;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Cabinet::factory(10)->create();
        Notaire::factory(10)->create();
        Vendeur::factory(10)->create();
        Terrain::factory(10)->create();
        DossierTerrain::factory(10)->create();

        // DB::table('dossier_terrains')->insert([
        //     [
        //         'iddossier' =>'12234',
        //         'date_ouverture' => date('2004-01-05'),
        //         'date_cloture'=> date('2004-02-05'),
        //         'numter'=> 'TTTT',

        //     ]
        // ]);
    }
}
