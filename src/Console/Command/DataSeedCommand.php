<?php

namespace Analyzen\Candidate\Console\Command;

use Analyzen\Candidate\Database\Seeders\QuestionSeed;
use Analyzen\Candidate\Database\Seeders\TestSeed;
use Analyzen\Candidate\Models\Question;
use Illuminate\Console\Command;

class DataSeedCommand extends Command
{
    protected $signature = 'talent:seed-data';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->seedQuestions();

        return 0;
    }

    protected function seedQuestions()
    {
        $this->warn("Seeding questions");


        $this->call('db:seed', [
            '--class' => QuestionSeed::class,
        ]);

        $questions = Question::all();

        $this->alert("Categories seeding is completed. Total Rows: " . $questions->count());

        $this->table(
            ['id', 'question', 'option_a', 'option_b', 'option_c', 'option_d', 'answer'],
            $questions->map->only('id', 'question', 'option_a', 'option_b', 'option_c', 'option_d', 'answer')
        );
    }
}
