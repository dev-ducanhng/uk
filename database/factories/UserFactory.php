<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'nickname' => $this->faker->userName(),
            'phone' => $this->faker->unique()->numerify('081########'),
            'password' => static::$password ??= Hash::make('password'),
            'role_id' => 1, // hoặc đặt mặc định tùy theo app của bạn
        ];
    }
}
