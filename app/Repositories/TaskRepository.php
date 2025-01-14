<?php
namespace App\Repositories;

use App\Models\User;

class TaskRepository
{
    public function forUser(User $user)
    {
        return $user->tasks()->orderBy('created_at', 'desc')->get();
    }

}
