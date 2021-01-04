<?php

namespace Database\Factories;

use App\Models\Situation;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

class SituationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Situation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'                => $this->faker->sentence,
            'type'                 => Arr::random(Situation::types()),
            'donation_information' => $this->faker->paragraph,
            'status'               => Arr::random([Situation::OPEN, Situation::CLOSED]),
        ];
    }
}
