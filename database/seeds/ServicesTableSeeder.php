<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
        	['service_name' => 'Hair Color', 'service_charge' => 450],
        	['service_name' => 'Haircut', 'service_charge' => 100],
        	['service_name' => 'Hair Curls', 'service_charge' => 200],
        	['service_name' => 'Hair Rebond', 'service_charge' => 2000],
        	['service_name' => 'Nail Treatment', 'service_charge' => 300]
        ];
        DB::table('services')->insert($services);
    }
}
