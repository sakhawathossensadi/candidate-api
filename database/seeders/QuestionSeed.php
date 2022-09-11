<?php

namespace Analyzen\Candidate\Database\Seeders;

use Analyzen\Candidate\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeed extends Seeder
{
    public function run()
    {
        $table = (new Question())->getTable();
        DB::table($table)->truncate();
        DB::table($table)->insert($this->getQuestions());
    }

    protected function getQuestions(): array
    {
        return [
            [
                'question' => 'When is the object created with a new keyword?',
                'option_a' => 'At run time',
                'option_b' => 'At compile time',
                'option_c' => 'Depends on the code',
                'option_d' => 'None',
                'answer' => 'a',
            ],
            [
                'question' => 'What is the number of parameters that a default constructor requires?',
                'option_a' => '1',
                'option_b' => '0',
                'option_c' => '3',
                'option_d' => '2',
                'answer' => 'b',
            ],
            [
                'question' => 'How is the 3rd element in an array accessed based on pointer notation?',
                'option_a' => '*a+3',
                'option_b' => '*(*a+3)',
                'option_c' => '&(a+3)',
                'option_d' => '*(a+3)',
                'answer' => 'd',
            ],
            [
                'question' => 'Data members and member functions of a class are private. default. True or False?',
                'option_a' => 'False',
                'option_b' => 'Depends on code',
                'option_c' => 'True',
                'option_d' => 'None',
                'answer' => 'c',
            ],
            [
                'question' => 'How are String represented in memory in C?',
                'option_a' => 'An array of characters',
                'option_b' => 'The object of some class',
                'option_c' => 'Same as primitive data types',
                'option_d' => 'Linked list characters',
                'answer' => 'a',
            ],
            [
                'question' => 'What is an object in c++?',
                'option_a' => 'It is a function of class',
                'option_b' => 'It is an instance of the class',
                'option_c' => 'It is the data type of the class',
                'option_d' => 'It is part of the syntax of class',
                'answer' => 'b',
            ],
            [
                'question' => 'Which of the following is an exit controlled loop?',
                'option_a' => 'While loop',
                'option_b' => 'For loop',
                'option_c' => 'do-while loop',
                'option_d' => 'None of the above',
                'answer' => 'c',
            ],
            [
                'question' => 'If p is an integer pointer with a value 1000, then what will the value of p + 5 be?',
                'option_a' => '1020',
                'option_b' => '1005',
                'option_c' => '1004',
                'option_d' => '1010',
                'answer' => 'a',
            ],
            [
                'question' => 'Choose the option below which is shown by function overriding',
                'option_a' => 'Abstraction',
                'option_b' => 'Encapsulation',
                'option_c' => 'Inheritance',
                'option_d' => 'Polymorphism',
                'answer' => 'd',
            ],
            [
                'question' => 'How to find the length of an array in C?',
                'option_a' => 'sizeof(a)',
                'option_b' => 'sizeof(a[0])',
                'option_c' => 'sizeof(a)/sizeof(a[0])',
                'option_d' => 'sizeof(a)*sizeof(a[0])',
                'answer' =>  'c',
            ],
            [
                'question' => 'Total instances of an abstract class that can be created?',
                'option_a' => '0',
                'option_b' => '1',
                'option_c' => '3',
                'option_d' => '6',
                'answer' => 'a',
            ],
            [
                'question' => 'Which of the following is not an oops concept?',
                'option_a' => 'Abstraction',
                'option_b' => 'Polymorphism',
                'option_c' => 'Compilation',
                'option_d' => 'Inheritance',
                'answer' => 'c',
            ],
            [
                'question' => 'Which of the following data structures finds its use in recursion?',
                'option_a' => 'Stack',
                'option_b' => 'Queues',
                'option_c' => 'Linkedlist',
                'option_d' => 'Arrays',
                'answer' => 'a',
            ],
            [
                'question' => 'What is the time complexity to insert an element to the rear of a LinkedList(head pointer given)?',
                'option_a' => 'O(n)',
                'option_b' => 'O(1)',
                'option_c' => 'O(logn)',
                'option_d' => 'O(n * logn)',
                'answer' => 'a',
            ],
            [
                'question' => 'Which of the following sorting algorithms provide the best time complexity in the worst-case scenario?',
                'option_a' => 'Quick Sort',
                'option_b' => 'Merge Sort',
                'option_c' => 'Bubble Sort',
                'option_d' => 'Selection Sort',
                'answer' => 'b',
            ]
        ];
    }
}
