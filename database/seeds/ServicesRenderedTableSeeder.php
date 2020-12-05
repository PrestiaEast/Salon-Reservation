<?php

use Illuminate\Database\Seeder;

class ServicesRenderedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicerendereds =[
        	['service_id' => '1', 'date' => '2020-01-05' ],
        	['service_id' => '2', 'date' => '2020-02-06' ],
        	['service_id' => '3', 'date' => '2020-03-07' ],
        	['service_id' => '4', 'date' => '2020-04-08' ],
        	['service_id' => '5', 'date' => '2020-05-09' ],
        	['service_id' => '1', 'date' => '2020-06-10' ],
        	['service_id' => '2', 'date' => '2020-07-11' ],
        	['service_id' => '3', 'date' => '2020-08-12' ],
        	['service_id' => '4', 'date' => '2020-09-13' ],
        	['service_id' => '5', 'date' => '2020-10-14' ]
        	
        ];

        DB::table('servicerendereds')->insert($servicerendereds);
    }
}
