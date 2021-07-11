<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class taskPolicy
{
    use HandlesAuthorization;

    public function delete(User $user,Task $task)
    {
        return $user->id === $task->user_id;
    }
}
