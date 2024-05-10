<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = User::class;

    public function definition()
    {
        return [
            'email' => $this->faker->name(),
            'password' =>Hash::make('12345678'),
        ];
    }
}
