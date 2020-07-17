<?php

use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('doctors')->insert([
            'name' => "doctor rabiea",
            'email' => 'doctor@gmail.com',
            'password' => Hash::make('password'),
            'phone_num'=> 123456,
            'specialization_id'=> 1,
        ]);

    }
}
