<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_name' => $this->faker->word(3),
            'course_desc_long' => $this->faker->paragraph,
            'course_desc_short' => $this->faker->paragraph,
            /*'course_image' => $this->faker->image('public/storage/images',400,300, null, false),*/
            'start_time' => "9:00",
            'end_time' => "4:00",
            'price' => $this->faker-> randomFloat($nbMaxDecimals = 2, $min = 100, $max = 200),

            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
