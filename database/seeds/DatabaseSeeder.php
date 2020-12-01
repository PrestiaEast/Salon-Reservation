<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< Updated upstream
        // $this->call(UserSeeder::class);
=======
        $this->call([
        	UsersTableSeeder::class,
        	ReservationsTableSeeder::class
        ]);
>>>>>>> Stashed changes
    }
}
