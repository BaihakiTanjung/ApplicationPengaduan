<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AsalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
    	$faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('asal')->insert([
    			'nama' => $faker->name,
    		]);
    }
}
}
