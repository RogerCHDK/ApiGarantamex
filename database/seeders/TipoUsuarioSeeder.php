<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;
use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoUsuario::create([
            'rol' => 'cliente',
            'nivel' => 1,
            'status' => 1
        ]);

        TipoUsuario::create([
            'rol' => 'empleado',
            'nivel' => 2,
            'status' => 1
        ]);

        TipoUsuario::create([
            'rol' => 'administrador',
            'nivel' => 3,
            'status' => 1
        ]);

        TipoUsuario::create([
            'rol' => 'duenio',
            'nivel' => 4,
            'status' => 1
        ]);
    }
}
