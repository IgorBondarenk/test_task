<?php

namespace App\Policies;

use App\User;
use App\Section;
use Illuminate\Auth\Access\HandlesAuthorization;

class SectionPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can view the section.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the section.
     *
     * @param  \App\User  $user
     * @param  \App\Section  $section
     * @return mixed
     */
    public function view(User $user, Section $section)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create sections.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the section.
     *
     * @param  \App\User  $user
     * @param  \App\Section  $section
     * @return mixed
     */
    public function update(User $user, Section $section)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the section.
     *
     * @param  \App\User  $user
     * @param  \App\Section  $section
     * @return mixed
     */
    public function delete(User $user, Section $section)
    {
        return $user->isAdmin();
    }
}
