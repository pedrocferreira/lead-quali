<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class LeadValidator.
 *
 * @package namespace App\Validators;
 */
class LeadValidator extends LaravelValidator
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
        ],
    
        ValidatorInterface::RULE_UPDATE => [],
    ];
}
