<?php

use Illuminate\Database\Seeder;

class AcademicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('academic')->insert([
            [
        		'academic'=>'2012-2013'
        	],
        	[
        		'academic'=>'2013-2014'
        	],
        	
        ]);
    }
}
