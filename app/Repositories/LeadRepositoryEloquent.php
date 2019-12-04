<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\LeadRepository;
use App\Entities\Lead;
use App\Validators\LeadValidator;

/**
 * Class LeadRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class LeadRepositoryEloquent extends BaseRepository implements LeadRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        
        return Lead::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return LeadValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
