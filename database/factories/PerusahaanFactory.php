<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perusahaan>
 */
class PerusahaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'nama_perusahaan' => $this->faker->company(),
            'deskripsi' => $this->faker->text(),
            'lokasi' => $this->faker->address(),
            'kontak' => $this->faker->phoneNumber(),
            'jam_operasional' => $this->faker->time(),
            'foto' => $this->faker->imageUrl()
        ];
    }
}
