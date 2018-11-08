<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
	    	[
	    		[
		            'FullName' 	=> 'admin',
		            'Email' 	=> 'admin@admin.com',
		            'Password' 	=> app('hash')->make('secret'),
		            'PhoneNumber' => '89677899',
                    'IsActive'  => 1
		        ]
	        ]
    	);
    }
}
