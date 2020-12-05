<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
        	['name' =>'Angel' , 'age' => '20', 'contact_number' => '0123', 'service_reserved' => 'Hair Rebond'],
        	['name' =>'Mary' , 'age' => '21', 'contact_number' => '0456', 'service_reserved' => 'Nail Treatment'],
        	['name' =>'Joy' , 'age' => '22', 'contact_number' => '0789', 'service_reserved' => 'Hair Color'],
        	['name' =>'Erica' , 'age' => '23', 'contact_number' => '0147', 'service_reserved' => 'Nail Treatment'],
        	['name' =>'Kim' , 'age' => '20', 'contact_number' => '0258', 'service_reserved' => 'Hair Color'],
        	['name' =>'Kyla' , 'age' => '21', 'contact_number' => '0369', 'service_reserved' => 'Haircut'],
        	['name' =>'Christine' , 'age' => '25', 'contact_number' => '0321', 'services_reserved' => 'Hair Curls'],
        	['name' =>'Lea' , 'age' => '30', 'contact_number' => '0654', 'service_reserved' => 'Nail Treatment'],
        	['name' =>'Bea' , 'age' => '28', 'contact_number' => '0987', 'service_reserved' => 'Hair Curls'],
        	['name' =>'Bianca' , 'age' => '26', 'contact_number' => '0159', 'service_reserved' => 'Haircut']
        ];

        DB::table('customers')->insert($customers);
    }
}
