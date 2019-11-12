<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class UserValidator.
 *
 * @package namespace App\Validators;
 */
class UserValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
        'nome' => 'required',
        'empresa_id' => 'required',
        'tipo_user'=> 'required',
        'email'=>'required',
        'login' => 'required',
        'password' => 'required',

        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];
}
