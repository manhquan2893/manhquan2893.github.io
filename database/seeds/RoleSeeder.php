<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('role')->insert([
            [
        		'name'=>'admin'
        	],
        	[
        		'name'=>'Receiptionist'
        	],
        	[
        		'name'=>'Manager'
        	],
        	[
        		'name'=>'member'
        	]
        ]);
    }
}
