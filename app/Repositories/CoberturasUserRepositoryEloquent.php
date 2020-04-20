<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CoberturasUserRepository;
use App\Entities\CoberturasUser;
use App\Validators\CoberturasUserValidator;

/**
 * Class CoberturasUserRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CoberturasUserRepositoryEloquent extends BaseRepository implements CoberturasUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CoberturasUser::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
