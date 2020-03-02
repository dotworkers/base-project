<?php

namespace App\Users\Repositories;

use App\Users\Entities\User;

class UsersRepo extends User
{
    public function getAll()
    {
        $users = User::all();
        return $users;
    }
}
