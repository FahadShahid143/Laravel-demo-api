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
        //
		//User::truncate();

        //$faker = \Faker\Factory::create();

        // Let's make sure everyone has the same password and 
        // let's hash it before the loop, or else our seeder 
        // will be too slow.
        //$password = Hash::make('toptal');

       
		for ($i = 0; $i < 10; $i++) {
            $user = array (
							array(
							'name' => 'Administrator',
                'email' => 'admin@test.com'.$i,
                'password' => 'toptal'.$i,
							)
							
							
		
		);
		DB::table('users')->insert($user);
            
		}
    }
}
