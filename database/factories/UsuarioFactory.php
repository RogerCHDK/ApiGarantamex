<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' =>  $this->faker->name(),
            'apellido_paterno' => $this->faker->lastName(),
            'apellido_materno' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono' =>  $this->faker->phoneNumber() ,
            'password' =>  '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' ,
            'ciudad' =>  $this->faker->city() ,
            'estado' =>  $this->faker->state() ,
            'calle' =>  $this->faker->streetName() ,
            'codigo_postal' => $this->faker->randomNumber(5, true) ,
            'numero_interior' => $this->faker->randomNumber(2, false) ,
            'numero_exterior' => $this->faker->randomNumber(2, false) ,
            'tipo_usuario_id' => 1 ,
            'status' => 1 ,
        ];
    }
}
