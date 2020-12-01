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
        	['service_id' => 1,'service_name' => 'Hair Color', 'service_charge' => 450, 'employee_name' => 'Jessa A.' ],
        	['service_id' => 2,'service_name' => 'Haircut', 'service_charge' => 100, 'employee_name' => 'Mariel B.'],
        	['service_id' => 3,'service_name' => 'Hair Curls', 'service_charge' => 200, 'employee_name' => 'Grace C.' ],
        	['service_id' => 4,'service_name' => 'Hair Rebond', 'service_charge' => 2000, 'employee_name' => 'Hannah E.' ],
        	['service_id' => 5,'service_name' => 'Nail Treatment', 'service_charge' => 300, 'employee_name' => 'Ina D.'],
        	['service_id' => 5,'service_name' => 'Nail Treatment', 'service_charge' => 300, 'employee_name' => 'Ina D.'],
        	['service_id' => 1,'service_name' => 'Hair Color', 'service_charge'=> 450, 'employee_name' => 'Jessa A.'],
        	['service_id' => 2,'service_name' => 'Haircut', 'service_charge' => 100, 'employee_name' => 'Mariel B.' ],
        	['service_id' => 3,'service_name' => 'Hair Curls', 'service_charge' => 200, 'employee_name' => 'Grace C.'],
        	['service_id' => 4,'service_name' => 'Hair Rebond', 'service_charge' => 2000 , 'employee_name' => 'Hannah E.']
        ];

        DB::table('reservations')->insert($reservations);
    }
}
