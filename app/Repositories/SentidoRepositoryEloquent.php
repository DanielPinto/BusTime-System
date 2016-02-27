<?php

namespace bustime\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use bustime\Repositories\SentidoRepository;
use bustime\Entities\Sentido;

/**
 * Class SentidoRepositoryEloquent
 * @package namespace bustime\Repositories;
 */
class SentidoRepositoryEloquent extends BaseRepository implements SentidoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Sentido::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
