<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\User;

interface UserRepository
{
    public function save(User $user): User;
}
