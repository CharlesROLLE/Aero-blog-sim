<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Post::class; 
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [
            'name'        => $name,
            'slug'        => Str::slug($name),
            'body'        => $this->faker->text(200),
            'image'       => $this->faker->image(storage_path(path:'app/public/posts') , 640, 480, category:false, fullPath:false), 
            'status'      => $this->faker->randomElement([1, 2]),
            'category_id' => Category::all()->random()->id,
            'user_id'     => User::all()->random()->id
        ];
    }
}
