<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Plant;

class PlantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plants = json_decode(file_get_contents(__DIR__ . "/plants.json"), true);
        foreach ($plants as $plant) 
        {
            $newPlant = new Plant();
            $newPlant->common_name = $plant['common_name'];
            $newPlant->scientific_name = $plant['scientific_name'];
            $newPlant->class = $plant['class'];
            $newPlant->family = $plant['family'];
            $newPlant->species = $plant['species'];
            $newPlant->width = $plant['width'];
            $newPlant->height = $plant['height'];
            $newPlant->habitat = $plant['habitat'];
            $newPlant->leaf_type = $plant['leaf_type'];
            $newPlant->leaf_color = $plant['leaf_color'];
            $newPlant->flower_color = $plant['flower_color'];
            $newPlant->img = $plant['img'];
            $newPlant->date_spotted = $plant['date_spotted'];
            $newPlant->place_spotted = $plant['place_spotted'];
            $newPlant->notes = $plant['notes'];
            $newPlant->save();   
        }
    }
}
