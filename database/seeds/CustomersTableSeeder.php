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
        	['reservation_id' => 1 ,'name' =>'Angel' , 'age' => 20, 'contact_number' => '0123', 'services_reserved' => 1, 'time_arrived' => '8:00'],
        	['reservation_id' => 2 ,'name' =>'Mary' , 'age' => 21, 'contact_number' => '0456', 'services_reserved' => 2, 'time_arrived' => '9:00'],
        	['reservation_id' => 3 ,'name' =>'Joy' , 'age' => 22, 'contact_number' => '0789', 'services_reserved' => 3, 'time_arrived' => '9:30'],
        	['reservation_id' => 4 ,'name' =>'Erica' , 'age' => 23, 'contact_number' => '0147', 'services_reserved' => 1, 'time_arrived' => '10:00'],
        	['reservation_id' => 5 ,'name' =>'Kim' , 'age' => 20, 'contact_number' => '0258', 'services_reserved' => 2, 'time_arrived' => '10:15'],
        	['reservation_id' => 6 ,'name' =>'Kyla' , 'age' => 21, 'contact_number' => '0369', 'services_reserved' => 3, 'time_arrived' => '10:30'],
        	['reservation_id' => 7 ,'name' =>'Christine' , 'age' => 25, 'contact_number' => '0321', 'services_reserved' => 2, 'time_arrived' => '10:40'],
        	['reservation_id' => 8 ,'name' =>'Lea' , 'age' => 30, 'contact_number' => '0654', 'services_reserved' => 2, 'time_arrived' => '11:00'],
        	['reservation_id' => 9 ,'name' =>'Bea' , 'age' => 28, 'contact_number' => '0987', 'services_reserved' => 2, 'time_arrived' => '11:30'],
        	['reservation_id' => 10 ,'name' =>'Bianca' , 'age' => 26, 'contact_number' => '0159', 'services_reserved' => 3, 'time_arrived' => '12:00']
        ];

        DB::table('customers')->insert($customers);
    }
}
