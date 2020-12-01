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
        $user = [
        	[
	        	'name' => 'Juan',
		    	'email' => 'juanD@gmail.com',
		    	'password' => bcrypt('password')
        	]
	    	
        ];

        DB::table('users')->insert($user);
    }
}
