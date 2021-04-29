<?php

declare(strict_types=1);

namespace App\Validators;

use Prettus\Validator\LaravelValidator;

class UserValidator extends LaravelValidator
{
    protected $rules = [
        'name' => 'max:255',
    ];
}
