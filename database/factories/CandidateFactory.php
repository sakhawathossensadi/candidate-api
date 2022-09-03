<?php

namespace Analyzen\Candidate\Database\Factories;

use Analyzen\Auth\Database\Factories\UserFactory;
use Analyzen\Candidate\Models\Candidate;

class CandidateFactory extends UserFactory
{
    protected $model = Candidate::class;
}
