<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Lead.
 *
 * @package namespace App\Entities;
 */
class Lead extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = true; 
    protected $fillable = ['nome', 'telefone' , 'email' , 'cidade' , 'empresa_id', 'qualificado_id'];



}


