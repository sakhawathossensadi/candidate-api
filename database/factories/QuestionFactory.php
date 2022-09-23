<?php

namespace Analyzen\Candidate\Database\Factories;

use Analyzen\Candidate\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition()
    {
        return [
            'question' => $this->faker->name(),
            'option_a' => $this->faker->name(),
            'option_b' => $this->faker->name(),
            'option_c' => $this->faker->name(),
            'option_d' => $this->faker->name(),
            'answer' => ['a', 'b', 'c', 'd'][random_int(0, 3)],
        ];
    }
}
