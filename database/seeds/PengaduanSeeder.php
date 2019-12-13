<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PengaduanSeeder extends Seeder
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
    		DB::table('pengaduan')->insert([
                'jenis_pengaduan_id' => $faker->numberBetween(1,50),
                'users_id' => $faker->numberBetween(22,26),
                'tgl_pengaduan' => $faker->date,
                'keterangan' => $faker->text(100),
    		]);
    }
    }
}
