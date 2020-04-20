<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Enderecos.
 *
 * @package namespace App\Entities;
 */
class Enderecos extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario', 'cep', 'logradouro', 'numero', 'complemento', 'id_uf', 'id_cidade'];

}
