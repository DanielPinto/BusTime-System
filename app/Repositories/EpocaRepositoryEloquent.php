<?php

namespace bustime\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use bustime\Repositories\EpocaRepository;
use bustime\Entities\Epoca;

/**
 * Class EpocaRepositoryEloquent
 * @package namespace bustime\Repositories;
 */
class EpocaRepositoryEloquent extends BaseRepository implements EpocaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Epoca::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
