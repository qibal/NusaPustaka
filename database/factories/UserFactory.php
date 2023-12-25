<?php


namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;


    public function definition()
    {
        return [
            'nama_mahasiswa' => $this->faker->name,
            'npm' => $this->faker->unique()->randomNumber(),
            'fakultas_id' => $this->faker->randomNumber(),
            'prodi_id' => $this->faker->randomNumber(),
            'kelas_id' => $this->faker->randomNumber(),
            'email' => $this->faker->unique()->safeEmail,
            'nomer_hp' => $this->faker->phoneNumber,
            'email_verified_at' => now(),
            'password' => Hash::make('password'), //enkripsi password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }


    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
