<?php

namespace Analyzen\Candidate\Http\Resources;

use Analyzen\Auth\Http\Resources\UserResource;

class CandidateResource extends UserResource
{
    public function toArray($request)
    {
        $data = parent::toArray($request);
        $data['cv_link'] = $this->cv_link;

        return $data;
    }
}
