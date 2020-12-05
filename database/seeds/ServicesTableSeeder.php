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
        	['employee_id' => '1','service_name' => 'Hair Color', 'service_charge' => '450'],
        	['employee_id' => '2','service_name' => 'Haircut', 'service_charge' => '100'],
        	['employee_id' => '3','service_name' => 'Hair Curls', 'service_charge' => '200'],
        	['employee_id' => '4','service_name' => 'Hair Rebond', 'service_charge' => '2000'],
        	['employee_id' => '5','service_name' => 'Nail Treatment', 'service_charge' => '300'],
        	['employee_id' => '1','service_name' => 'Hair Color', 'service_charge' => '450'],
        	['employee_id' => '2','service_name' => 'Haircut', 'service_charge' => '100'],
        	['employee_id' => '3','service_name' => 'Hair Curls', 'service_charge' => '200'],
        	['employee_id' => '4','service_name' => 'Hair Rebond', 'service_charge' => '2000'],
        	['employee_id' => '5','service_name' => 'Nail Treatment', 'service_charge' => '300']
        ];
        DB::table('services')->insert($services);
    }
}
