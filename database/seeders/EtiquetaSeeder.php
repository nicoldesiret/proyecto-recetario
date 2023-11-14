<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Etiqueta;

class EtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Etiqueta::factory()->create(['etiqueta' => 'Vegana']);
        Etiqueta::factory()->create(['etiqueta' => 'Vegetariana']);
        Etiqueta::factory()->create(['etiqueta' => 'Rápida']);
        Etiqueta::factory()->create(['etiqueta' => 'Sin Gluten']);
        Etiqueta::factory()->create(['etiqueta' => 'Sin Lácteos']);
        Etiqueta::factory()->create(['etiqueta' => 'Alta en Proteínas']);
    }
}
