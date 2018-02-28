<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function verify(User $currentUser,User $user)
    {
        return $currentUser->id === $user->id;
    }

    public function bind_course(User $currentUser)
    {
        return $currentUser->is_ta && session('identity');
    }
}
