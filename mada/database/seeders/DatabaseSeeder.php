<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');
        
        DB::table('users')->insert([
            'name' => 'Briedis',
            'email' => 'briedis@gmail.com',
            'password' => Hash::make('123'),
        ]);

        foreach(range(1, 20) as $run) {
            DB::table('masters')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'portret' => rand(0, 3) ? $faker->imageUrl(150, 200) : null,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }

        $types = ['Shorts', 'Dress', 'Pants', 'Jumper', 'Pullover', 'Overall', 'Bodies', 'Bikini', 'Sunkiny', 'Kimono', 'Strings', 'Panties'];

        foreach(range(1, 200) as $run) {
            DB::table('outfits')->insert([
                'type' => $types[rand(0, count($types)-1)],
                'color' => $faker->safeColorName,
                'size' => rand(2, 22),
                'about' => $faker->paragraph(rand(3, 10)),
                'master_id' => rand(1, 20),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
