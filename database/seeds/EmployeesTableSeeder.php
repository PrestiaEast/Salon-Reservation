<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
        	['name' => 'Jessa A.', 'age' => '35', 'contact_number' => '0102'],
        	['name' => 'Mariel B.', 'age' => '30', 'contact_number' => '0103'],
        	['name' => 'Grace C.', 'age' => '38', 'contact_number' => '0104'],
        	['name' => 'Hannah E.', 'age' => '37', 'contact_number' => '0105'],
        	['name' => 'Ina D.', 'age' => '25', 'contact_number' => '0106'],
        	['name' => 'Mie M.', 'age' => '28', 'contact_number' => '0107'],
        	['name' => 'Jena K.', 'age' => '29', 'contact_number' => '0108'],
        	['name' => 'Ani B.', 'age' => '32', 'contact_number' => '0109'],
        	['name' => 'Jon R.', 'age' => '31', 'contact_number' => '0110'],
			['name' => 'Nor M.', 'age' => '30', 'contact_number' => '0111']
        ];

         DB::table('employees')->insert($employees);
    }
}
