<?php

namespace bustime\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use bustime\Repositories\ModalidadeRepository;
use bustime\Entities\Modalidade;

/**
 * Class ModalidadeRepositoryEloquent
 * @package namespace bustime\Repositories;
 */
class ModalidadeRepositoryEloquent extends BaseRepository implements ModalidadeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Modalidade::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
