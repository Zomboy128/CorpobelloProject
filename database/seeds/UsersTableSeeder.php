<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'departname_id'=>'1',
            'name' => 'David Chavarria',
            'email' => 'david.chavarria2@gmail.com',
            'password' => bcrypt('Equinox1995'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'departname_id'=>'2',
            'name' => 'Oswaldo Chavarria',
            'email' => 'david.chavarria2@hotmail.com',
            'password' => bcrypt('gtavc128'),
        ]);
    }
}
