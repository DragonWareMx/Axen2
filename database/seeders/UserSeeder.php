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
            'office_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
