<?php

namespace bustime\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use bustime\Repositories\LinhaRepository;
use bustime\Entities\Linha;

/**
 * Class LinhaRepositoryEloquent
 * @package namespace bustime\Repositories;
 */
class LinhaRepositoryEloquent extends BaseRepository implements LinhaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Linha::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
