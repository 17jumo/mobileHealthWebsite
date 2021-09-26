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
            'course_name' => $this->faker->realText(50),
            'course_desc_long' => $this->faker->paragraph(1),
            'course_desc_short' => $this->faker->paragraph(2),
            'price' => $this->faker-> randomFloat($nbMaxDecimals = 2, $min = 100, $max = 200),
            'duration' => "1 day",
            'start_time' => "9:00",
            'end_time' => "4:00",
            /*'course_image' => $this->faker->image('public/storage/images',400,300, null, false),*/

            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
