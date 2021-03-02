<?php

namespace Database\Factories;

use App\Models\Tin;
use Illuminate\Database\Eloquent\Factories\Factory;

class TinFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tins::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thu_tu'=>$this->faker->randomDigit,
            'tieu_de'=>$this->faker->text,
            'tieu_de_khong_dau'=>$this->faker->slug,
            'tom_tat'=>$this->faker->text
        ];
    }
}