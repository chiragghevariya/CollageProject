<?php

use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' =>'faculty 1',
            'email'=>"f1@gmail.com",
            'phone'=>'9825326562',
            'password'=>bcrypt('1234'),
            'address'=>"college",
            'department_id' => 1,
            'role'=> 1,

        ]);


        DB::table('faculties')->insert([

            'info' =>"i am chiafadf",
            'user_id'=> 2,

        ]);


        DB::table('users')->insert([

            'name' =>'student ',
            'email'=>"s@gmail.com",
            'phone'=>'9825326562',
            'password'=>bcrypt('1234'),
            'address'=>"college",
            'department_id' => 1,
            'role'=> 3,

        ]);


        DB::table('students')->insert([

            'user_id'=> 3,
            'Enrollment'=>130210107013,

        ]);


    }
}
