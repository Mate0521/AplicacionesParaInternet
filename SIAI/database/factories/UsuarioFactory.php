<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero_identificacion' => $this->faker->unique()->randomNumber(),
            'nombre' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'clave' => md5($this->faker->password()),
            'direccion' => $this->faker->address(),
            
        ];
    }
}
