<?php

namespace Analyzen\Candidate\Models;

use Analyzen\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Candidate extends User
{
    protected $table = 'users';
}
