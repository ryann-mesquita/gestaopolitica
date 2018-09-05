<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        DB::table('admins')->insert([
        	'name' => 'Ryann Admin',
        	'email'=> 'ryann@adm.com.br',
        	'password' => Hash::make('123456'),
        	]); 
    }
}
