<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 20; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('pegawai')->insert([
    			'nama' => $faker->nama,
    			'email' => $faker->email,
    			'alamat' => $faker->alamat,
    			'telepon' => $faker->telepon,
    			'pekerjaan' => $faker->pekerjaan
    		]);
 
    	}
    }
}
