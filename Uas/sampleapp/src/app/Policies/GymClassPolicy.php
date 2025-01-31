<?php

namespace App\Policies;

use App\Models\GymClass;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GymClassPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any gym classes.
     */
    public function viewAny(User $user): bool
    {
        // Allow all authenticated users to view gym classes list
        return true;
    }

    /**
     * Determine whether the user can view the gym class.
     */
    public function view(User $user, GymClass $gymClass): bool
    {
        // Allow all authenticated users to view gym class details
        return true;
    }

    /**
     * Determine whether the user can create gym classes.
     */
    public function create(User $user): bool
    {
        // Only admin and instructor roles can create gym classes
        return $user->hasRole(['admin', 'instructor']);
    }

    /**
     * Determine whether the user can update the gym class.
     */
    public function update(User $user, GymClass $gymClass): bool
    {
        // Only admin and instructor roles can update gym classes
        return $user->hasRole(['admin', 'instructor']);
    }

    /**
     * Determine whether the user can delete the gym class.
     */
    public function delete(User $user, GymClass $gymClass): bool
    {
        // Only admin role can delete gym classes
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can restore the gym class.
     */
    public function restore(User $user, GymClass $gymClass): bool
    {
        // Only admin role can restore gym classes
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can permanently delete the gym class.
     */
    public function forceDelete(User $user, GymClass $gymClass): bool
    {
        // Only admin role can permanently delete gym classes
        return $user->hasRole('admin');
    }
}
