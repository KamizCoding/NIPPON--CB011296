<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->numerify('##########'), // Ensures a 10-digit number
            'date_of_birth' => $this->faker->date(),
            'home_address' => $this->faker->address,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => \Illuminate\Support\Str::random(10),
        ];
    }
}
