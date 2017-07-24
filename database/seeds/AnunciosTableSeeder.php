<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class AnunciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i < 10; $i++)
        {
           DB::table('anuncios')->insert([
                'titulo' => $faker->title,
                'descripcion' => $faker->paragraph(1)
            ]); 
        }        
    }
}
