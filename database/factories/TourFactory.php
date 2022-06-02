<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Tour;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->words(3, true);
        
    
        
        return [

            'legNumber'      => $this->faker->randomNumber(2, false),
            'name'           => $name,
            'slug'           => Str::slug($name),
            'icaoDep'        => $this->faker->text(10),
            'imageDep'       => $this->faker->image(storage_path(path:'app/public/tours') , 640, 480, category:false, fullPath:false),
            'icaoDepContent' => $this->faker->words(32, true),
            'icaoDes'        => $this->faker->text(10),
            'imageDes'       => $this->faker->image(storage_path(path:'app/public/tours') , 640, 480, category:false, fullPath:false),
            'icaoDesContent' => $this->faker->words(32, true),   
            'descriptionLeg' => $this->faker->words(42, true),  
            'rutaIfr'        => $this->faker->words(32, true), 
            'departures'     => $this->faker->words(20, true), 
            'arrivals'       => $this->faker->words(20, true), 
            'approachs'      => $this->faker->words(20, true)        
            
        ];
    }
}
