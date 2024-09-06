<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Question;

class QuestionPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Question $question)
    {
        return true;
    }

    public function create(User $user)
    {
        return $user->isAdmin();
    }

    public function update(User $user, Question $question)
    {
        return $user->isAdmin();
    }

    public function delete(User $user, Question $question)
    {
        return $user->isAdmin();
    }

    public function restore(User $user, Question $question): bool
    {
        return $user->isAdmin();
    }

    public function forceDelete(User $user, Question $question): bool
    {
        return $user->isAdmin();
    }
}
