<?php

namespace App\Policies;

use App\Models\Student;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class StudentPolicy
{
    public function edit(User $user, Student $student) {
        return $student->user()->is($user);
    }
}
