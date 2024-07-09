<?php

namespace Database\Seeders;

use App\Models\Personil;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;


class PersonilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $name = $faker->name;
        Personil::create([
            'kode_personil' => Str::random(10),
            'name' => 'Kepala Sekolah',
            'email' => 'kepalasekolah@gmail.com',
            'phone' => $faker->phoneNumber(),
            'jabatan' => 1,
            'image' => 'person.jpg',
            'sambutan' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        for ($i = 1; $i <= 5; $i++) {
            Personil::create([
                'kode_personil' => Str::random(10),
                'name' => $faker->name,
                'email' => $name. '@gmail.com',
                'phone' => $faker->phoneNumber,
                'jabatan' => 2,
                'image' => 'person.jpg',
            ]);
        }
    }
}
