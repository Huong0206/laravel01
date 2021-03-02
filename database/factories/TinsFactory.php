<?php

namespace Database\Factories;

use App\Models\Tins;
use Illuminate\Database\Eloquent\Factories\Factory;

class TinsFactory extends Factory
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
            //
            'thu_tu'=>$this->faker->randomDigit,
            'loaitin_id'=>1,
            'tom_tat'=>$this->faker->text
        ];
    }
}
