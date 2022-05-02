<?php

namespace Database\Factories;

use App\Models\Contacts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;


class ContactsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contacts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now = Carbon::now();
        return [
            'fullname' => $this->faker->fullname,
            'gender' => $this->$faker->numberBetween(1,2),
            'email' => $this->faker->unique()->safeEmail,
            'postcode' => $faker->postcode,
            'address'  => $faker->address,
            'building_name' => $faker->building_name,
            'opinion' => $faker->realText($maxNbChars = 120),
            'email_verified_at' => now(),
            'remember_token' => Str::random(35),
            'created_at' => $timestamp,
            'updated_at' => $Timestamp,
        ];
    }
}