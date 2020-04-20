<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CotacoesRepository;
use App\Entities\Cotacoes;
use App\Validators\CotacoesValidator;

/**
 * Class CotacoesRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CotacoesRepositoryEloquent extends BaseRepository implements CotacoesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Cotacoes::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
