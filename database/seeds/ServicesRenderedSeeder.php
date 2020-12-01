<?php

use Illuminate\Database\Seeder;

class ServicesRenderedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicesrendered =[
        	['service_id' => 001, 'customer_id' => 111,'service_name' => 'Hair Color', 'service_charge' => 450, 'month' => 'January.' ],
        	['service_id' => 002, 'customer_id' => 222,'service_name' => 'Haircut', 'service_charge' => 100, 'month' => 'January'],
        	['service_id' => 003, 'customer_id' => 333,'service_name' => 'Hair Curls', 'service_charge' => 200, 'month' => 'February' ],
        	['service_id' => 004, 'customer_id' => 444,'service_name' => 'Hair Rebond', 'service_charge' => 2000, 'month' => 'January' ],
        	['service_id' => 005, 'customer_id' => 555,'service_name' => 'Nail Treatment', 'service_charge' => 300, 'month' => 'February'],
        ];

        DB::table('servicesrendereds')->insert($servicesrendered);
    }
}
