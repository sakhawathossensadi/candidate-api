<?php

namespace Analyzen\Candidate\Tests\Features;

use Analyzen\Candidate\Tests\TestCase;

class CandidateApiTest extends TestCase
{
    public function tests_candidate_registration()
    {
        $this->withoutExceptionHandling();

        $this->assertTrue(true);
    }

    public function tests_candidate_profile()
    {
        $this->withExceptionHandling();

        $candidate = $this->candidate;

        $response = $this->actingAs($this->candidate, 'api')
            ->getJson(route('candidate.profile'));

        $response->assertJsonFragment([
            'name' => $candidate->name,
        ]);
    }
}
