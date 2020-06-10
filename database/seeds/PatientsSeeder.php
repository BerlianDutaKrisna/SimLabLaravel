<?php

use Illuminate\Database\Seeder;

class PatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'no_rm' =>'000000',
            'nama' => 'Berlian Duta Krisna',
            'gender' => 'Laki-laki',
            'usia' => 23,
            
        ]);
    }
}
