<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

// App\Models\Product::factory()->times(50)->create(['slug'=>'Fake_product','price'=>500.86]);

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $post_ids = Pro::pluck('id')->toArray();
        return [
            'name' => $this->faker->name(),
            'description'=> $this->faker->sentence(20),
            // 'price'=> $this->faker->decimal(5,2),
        ];
    }
}
