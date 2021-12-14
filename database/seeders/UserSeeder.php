<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Dragonware',
            'email' => 'test@dragonware.com.mx',
            'password' => Hash::make('viledruid9000'),
            'office_id'=>2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Fanny',
            'email' => 'fanny-17231@hotmail.com',
            'password' => Hash::make('axenPublicoFanny'),
            'office_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Karla',
            'email' => 'karlacha0731@gmail.com',
            'password' => Hash::make('axenPublicoKarla'),
            'office_id'=>2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Ulises',
            'email' => 'ulisesfex19@gmail.com',
            'password' => Hash::make('axenPublicoUlises'),
            'office_id'=>3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Erika',
            'email' => 'erikaxen01@gmail.com',
            'password' => Hash::make('axenPublicoErika'),
            'office_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Nombre',
            'email' => 'lithr0322@gmail.com',
            'password' => Hash::make('axenPublico'),
            'office_id'=>5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Maggie García',
            'email' => 'maggie_garcia_martinez@hotmail.com',
            'password' => Hash::make('axenPublicoMaggie'),
            'office_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Monserrath Hernández',
            'email' => 'monserrathernandez.axc@gmail.com',
            'password' => Hash::make('axenPublicoMonse'),
            'office_id'=>7,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Dani Garrido',
            'email' => 'danigarrido93@hotmail.com',
            'password' => Hash::make('axenPublicoDani'),
            'office_id'=>8,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Nombre CDMX',
            'email' => 'ot.isha@yahoo.com',
            'password' => Hash::make('axenPublicoCDMX'),
            'office_id'=>9,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Lizbeth',
            'email' => 'sangermanlizbeth@gmail.com',
            'password' => Hash::make('axenPublicoLizbeth'),
            'office_id'=>10,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
