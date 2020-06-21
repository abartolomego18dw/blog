<?php

namespace App\Policies;

use App\User;
use App\Post;
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
        
    }

    public function before($user, $ability)
    {
        if($user->hasrole(['admin']))
        {
            return true;
        }
    }

    public function view(User $authUser, Post $post)
    {
        return $authUser->id === $post->user_id; 
    }
}
