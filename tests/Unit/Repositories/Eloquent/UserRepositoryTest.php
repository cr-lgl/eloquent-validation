<?php

declare(strict_types=1);

namespace Tests\Unit\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Eloquent\UserRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Prettus\Validator\Exceptions\ValidatorException;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_will_throw_validator_exception(): void
    {
        $repository = resolve(UserRepository::class);

        $user = User::factory()->makeOne([
            'name' => Str::random(256),
        ]);

        $this->expectException(ValidatorException::class);

        $repository->create($user->toArray());
    }
}
