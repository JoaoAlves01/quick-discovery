<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Cotacoes.
 *
 * @package namespace App\Entities;
 */
class Cotacoes extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario', 'estado_civil', 'renda', 'id_parcela', 'premio', 'numero_cotacao', 'numero_proposta', 'inicio_vigencia', 'fim_vigencia', 'id_corretor', 'indenizacoes'];

}
