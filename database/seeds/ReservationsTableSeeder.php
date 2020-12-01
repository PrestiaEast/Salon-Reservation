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
        	['service_name' => 'Hair Color', 'service_charge' => 450, 'employee_name' => 'Jessa A.' ],
        	['service_name' => 'Haircut', 'service_charge' => 100, 'employee_name' => 'Mariel B.'],
        	['service_name' => 'Hair Curls', 'service_charge' 200 => , 'employee_name' => 'Grace C.' ],
        	['service_name' => 'Hair Rebond', 'service_charge' => 2000, 'employee_name' => 'Hannah E.' ],
        	['service_name' => 'Nail Treatment', 'service_charge' => 300, 'employee_name' => 'Ina D.'],
        	['service_name' => 'Nail Treatment', 'service_charge' => 300, 'employee_name' => 'Ina D.'],
        	['service_name' => 'Hair Color', 'service_charge' 450 => , 'employee_name' => 'Jessa A.'],
        	['service_name' => 'Haircut', 'service_charge' 100 => , 'employee_name' => 'Mariel B.' ],
        	['service_name' => 'Hair Curls', 'service_charge' => 200, 'employee_name' => 'Grace C.'],
        	['service_name' => 'Hair Rebond', 'service_charge' => 2000 , 'employee_name' => 'Hannah E.'],
        ];
    }
}
