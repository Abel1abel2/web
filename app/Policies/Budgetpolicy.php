<?php

namespace App\Policies;

use App\Models\Budget;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;

class Budgetpolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function view(User $user, Budget $budget)
    {
        // Check if the $user is the owner of the $budget

        // Check if the $user is the owner of the $budget
        return $budget->user->is($user);
    }
}
