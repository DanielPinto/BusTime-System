<?php

namespace bustime\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use bustime\Repositories\EtinerarioRepository;
use bustime\Entities\Etinerario;

/**
 * Class EtinerarioRepositoryEloquent
 * @package namespace bustime\Repositories;
 */
class EtinerarioRepositoryEloquent extends BaseRepository implements EtinerarioRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Etinerario::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
