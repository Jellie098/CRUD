<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo_id'=> $this->faker->numberBetween(1, 4),
            'nombre'=>  $this->faker->sentence(3),
            'especie'=> $this->faker->word(),
            'precio'=> $this->faker->randomFloat(2, 10, 300),
            'fechaIngreso' => $this->faker->dateTime(),
        ];
    }
}
