<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            'id' => '1'
        ]);
        DB::table('users')->insert([
            'userId' => 'sp-user'
        ]);
        DB::table('users')->insert([
            'password' => '0000'
        ]);
    }
}
