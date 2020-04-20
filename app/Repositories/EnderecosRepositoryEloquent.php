<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EnderecosRepository;
use App\Entities\Enderecos;
use App\Validators\EnderecosValidator;

/**
 * Class EnderecosRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EnderecosRepositoryEloquent extends BaseRepository implements EnderecosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Enderecos::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
