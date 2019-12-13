<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class UstadzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 50; $i++) {

            DB::table('ustadz')->insert([
                'nip' => $faker->unique()->randomDigit ,
                'nama' => $faker->unique()->name,
                'jabatan' => $faker->jobTitle,
                'asal_id' => $faker->numberBetween(57, 93),
                'tmp_lahir' => $faker->text(10),
                'tgl_lahir' => $faker->date,
                'alamat' => $faker->text(100),
                'hp' => $faker->randomDigit,
                'email' => $faker->email,
            ]);
        }
    }
}
