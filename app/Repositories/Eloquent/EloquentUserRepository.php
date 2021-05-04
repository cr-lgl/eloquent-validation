<?php

declare(strict_types=1);

namespace App\Repositories\Eloquent;

use App\Entities\User;
use App\Models\User as EloquentUser;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use AutoMapperPlus\AutoMapper;
use Illuminate\Container\Container as Application;
use Prettus\Repository\Eloquent\BaseRepository;

class EloquentUserRepository extends BaseRepository implements UserRepository
{
    private AutoMapper $mapper;

    public function __construct(Application $app, AutoMapper $mapper)
    {
        parent::__construct($app);
        $this->mapper = $mapper;
    }

    public function save(User $user): User
    {

    }

    public function model(): string
    {
        return EloquentUser::class;
    }

    public function validator(): string
    {
        return UserValidator::class;
    }
}
