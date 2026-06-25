<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    public function run(): void
    {
        $formations = [
            "Projet de branding",
            "Projet de communication",
            "Projet de marketing",
            "Couverture média",
            "Personal branding",
            "Formation",
            "Prise de contact",
        ];

        foreach ($formations as $formation) {
            Formation::firstOrCreate([
                "title" => $formation,
            ]);
        }
    }
}
