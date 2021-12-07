<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('offices')->insert([
            'ciudad' => 'Uruapan, Mich.',
            'direccion' => 'dir',
        ]);
        DB::table('offices')->insert([
            'ciudad' => 'Morelia, Mich',
            'direccion' => 'dir',
        ]);
        DB::table('offices')->insert([
            'ciudad' => 'León, Gto.',
            'direccion' => 'dir',
        ]);
        DB::table('offices')->insert([
            'ciudad' => 'Guadalajara, Jal.',
            'direccion' => 'dir',
        ]);
        DB::table('offices')->insert([
            'ciudad' => 'Cuernavaca, Mor.',
            'direccion' => 'dir',
        ]);
        DB::table('offices')->insert([
            'ciudad' => 'Puebla, Pue.',
            'direccion' => 'dir',
        ]);
        DB::table('offices')->insert([
            'ciudad' => 'Xalapa, Ver.',
            'direccion' => 'dir',
        ]);
        DB::table('offices')->insert([
            'ciudad' => 'Boca del Río, Ver',
            'direccion' => 'dir',
        ]);
        DB::table('offices')->insert([
            'ciudad' => 'Ciudad de México',
            'direccion' => 'dir',
        ]);


    }
}
