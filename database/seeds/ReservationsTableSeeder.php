<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservations =[
        	['customer_id' => '1','service_id' => '1','employee_id' => '1', 'reservation_time' => '09:00:00'],
        	['customer_id' => '2','service_id' => '2','employee_id' => '2', 'reservation_time' => '10:00:00'],
        	['customer_id' => '3','service_id' => '4','employee_id' => '4', 'reservation_time' => '11:00:00'],
        	['customer_id' => '4','service_id' => '2','employee_id' => '2', 'reservation_time' => '14:00:00'],
        	['customer_id' => '5','service_id' => '4','employee_id' => '4', 'reservation_time' => '15:00:00'],
        	['customer_id' => '6','service_id' => '3','employee_id' => '3', 'reservation_time' => '16:00:00'],
        	['customer_id' => '7','service_id' => '5','employee_id' => '5', 'reservation_time' => '17:00:00'],
        	['customer_id' => '8','service_id' => '2','employee_id' => '2', 'reservation_time' => '18:00:00'],
        	['customer_id' => '9','service_id' => '5','employee_id' => '5', 'reservation_time' => '11:00:00'],
        	['customer_id' => '10','service_id' => '3','employee_id' => '3', 'reservation_time' => '13:00:00'],
        ];

        DB::table('reservations')->insert($reservations);
    }
}
