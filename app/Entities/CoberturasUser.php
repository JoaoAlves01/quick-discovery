<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class CoberturasUser.
 *
 * @package namespace App\Entities;
 */
class CoberturasUser extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cobertura', 'id_usuario', 'premio', 'status'];

    public function coberturas(){
        return $this->hasMany(Coberturas::class, 'id', 'id_cobertura');
    }

    public function users(){
        return $this->hasMany(User::class, 'id', 'id_usuario');
    }

    public function enderecos(){
        return $this->hasMany(Enderecos::class, 'id', 'id_usuario');
    }
}
