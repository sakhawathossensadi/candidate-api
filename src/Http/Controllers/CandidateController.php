<?php

namespace Analyzen\Candidate\Http\Controllers;

use Analyzen\Candidate\Http\Requests\CandidateRequest;
use Analyzen\Candidate\Http\Resources\CandidateResource;
use Analyzen\Candidate\Models\Candidate;

class CandidateController extends BaseController
{
    public function register(CandidateRequest $request)
    {
        $userData = $request->all();
        $userData['password'] = bcrypt($userData['password']);
        $userData['status'] = 0;
        $userData['role'] = 'candidate';

        $candidate = Candidate::create($userData);

        return response(new CandidateResource($candidate), 201);
    }
}
