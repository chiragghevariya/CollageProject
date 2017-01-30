<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' =>'Admin',
            'email'=>"admin@gmail.com",
            'phone'=>'9825326562',
            'password'=>bcrypt('1234'),
            'address'=>"college",
            'role'=>'0',

        ]);
    }
}
