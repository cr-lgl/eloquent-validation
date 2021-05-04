<?php

declare(strict_types=1);

namespace App\Providers;

use App\Entities\User;
use App\Models\User as EloquentUser;
use AutoMapperPlus\AutoMapper;
use AutoMapperPlus\Configuration\AutoMapperConfig;
use Illuminate\Support\ServiceProvider;

class AutoMapperServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(AutoMapper::class, function () {
            $config = new AutoMapperConfig();
            $config->registerMapping(EloquentUser::class, User::class)->reverseMap();

            return new AutoMapper($config);
        });
    }
}
