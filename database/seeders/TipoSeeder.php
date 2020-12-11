<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert(['tipo'=> 'De sombra']);
        DB::table('tipos')->insert(['tipo'=> 'De media sombra']);
        DB::table('tipos')->insert(['tipo'=> 'De luz solar']);
        DB::table('tipos')->insert(['tipo'=> 'No aplica']);
    }
}
