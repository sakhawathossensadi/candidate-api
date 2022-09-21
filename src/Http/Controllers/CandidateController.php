<?php

namespace Analyzen\Candidate\Http\Controllers;

use Analyzen\Candidate\Http\Requests\CandidateRequest;
use Analyzen\Candidate\Http\Resources\CandidateResource;
use Analyzen\Candidate\Models\Candidate;
use Analyzen\Candidate\Models\Question;
use Illuminate\Http\Request;

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

    public function profile(Request $request)
    {
        $candidate = $request->user();

        return new CandidateResource($candidate);
    }

    public function quiz(Request $request)
    {
        $candidate = $request->user();
        $candidateAnswer = $request->answer;
        $ans = [];
        $count = 0;

        if ($candidate->status == 0) {
            return response([
                'message' => "You are not eligible for quiz",
            ]);
        }

        $questions = Question::all();

        foreach ($questions as $question) {
            array_push($ans, $question->answer);
        }

        for ($i = 0; $i < $questions->count(); $i++) {
            if ($ans[$i] == $candidateAnswer[$i]) {
                $count++;
            }
        }

        return response([
            'mark' => "Obtained mark : " . (string) $count,
        ]);
    }
}
