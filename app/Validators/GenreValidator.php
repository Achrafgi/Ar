<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class GenreValidator.
 *
 * @package namespace App\Validators;
 */
class GenreValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|string|min:3|max:255'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|string|min:3|max:255'
        ],
    ];

    protected $messages = [
        'required' => 'The :attribute field is required.',
    ];

    protected $attributes = [
        'name' => "genre's name"
    ];
}
