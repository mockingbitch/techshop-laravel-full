<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customerName' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$5izgpUF1nB30nt4lL/O70.XGixHb9NfDNncByhXlpErvnChygjiE6',
            'emailVerify'=>1,
            'rememberToken' => Str::random(10),
        ];
    }

}
