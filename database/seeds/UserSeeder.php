<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('users')->insert([
            [
        		'name'=>'quan',
        		'username'=>'manhquan',
        		'email'=>'manhquan2893@gmail.com',
        		'password'=>bcrypt(123),
                'role_id'=>1,
                'active'=>1
        	],
        	[
        		'name'=>'ky',
        		'user_name'=>'xuanky',
        		'email'=>'xuanky10203@gmail.com',
        		'password'=>bcrypt(123),
                'role_id'=>2,
                'active'=>1
        	],
        	[
        		'name'=>'hihi',
        		'user_name'=>'ahihi',
        		'email'=>'manhquan@gmail.com',
        		'password'=>bcrypt(123),
                'role_id'=>3,
                'active'=>1
        	],
        	[
        		'name'=>'hehe',
        		'user_name'=>'ahehe',
        		'email'=>'manhquan93@gmail.com',
        		'password'=>bcrypt(123),
                'role_id'=>4,
                'active'=>1
        	]
        ]);
    }
}
