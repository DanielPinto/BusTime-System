<?php

namespace bustime\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Etinerario extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'linha_id',
        'etinerario',
        'codigo'
    ];

}
