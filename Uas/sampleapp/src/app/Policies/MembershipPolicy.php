<?php

namespace App\Policies;

use App\Models\Membership;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MembershipPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any memberships.
     */
    public function viewAny(User $user): bool
    {
        // Allow admin users to view the list of memberships
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can view the membership.
     */
    public function view(User $user, Membership $membership): bool
    {
        // Allow admin users to view membership details
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can create memberships.
     */
    public function create(User $user): bool
    {
        // Only admin users can create new memberships
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can update the membership.
     */
    public function update(User $user, Membership $membership): bool
    {
        // Only admin users can update membership details
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can delete the membership.
     */
    public function delete(User $user, Membership $membership): bool
    {
        // Only admin users can delete memberships
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can restore the membership.
     */
    public function restore(User $user, Membership $membership): bool
    {
        // Only admin users can restore soft-deleted memberships
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can permanently delete the membership.
     */
    public function forceDelete(User $user, Membership $membership): bool
    {
        // Only admin users can permanently delete memberships
        return $user->hasRole('admin');
    }
}
