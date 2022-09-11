<?php

namespace Analyzen\Admin\Tests\Unit\Console;

use Analyzen\Candidate\Tests\TestCase;

class QuestionDataSeedTest extends TestCase
{
    public function tests_question_data_seeding()
    {
        $this->withoutExceptionHandling();

        $this->artisan('talent:seed-data')
            ->assertExitCode(0);
    }
}
