<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'coursedate_id' => $this->faker->randomDigit+1,
            'first_name' => $this->faker-> firstName,
            'last_name' => $this->faker->lastName,
            'phone' => $this->faker->phonenumber,
            'email' => $this->faker->email(),
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'gender' => "female",
            'company_name' => $this->faker->word(1),
            'add_street' => $this->faker->streetAddress,
            'add_suburb' => $this->faker->state,
            'add_city' => $this->faker->state,
            'add_postcode' => $this->faker->postcode,
            'add_country' => $this->faker->country,
            'course_name' => $this->faker->word(),
            'course_date' => $this->faker->date(),
            'course_total' => $this->faker->numberBetween(100,400),

            'created_at' => now(),
            'updated_at' => now(),
        ];

    }
}
