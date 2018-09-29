<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartNameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departname')->insert([
            'name' => 'Spa',
            'slug' => 'spa',
        ]);

        DB::table('departname')->insert([
            'name' => 'Dermatologia',
            'slug' => 'dermatologia',
        ]);
    }
}
