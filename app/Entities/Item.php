<?php

namespace bustime\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Item extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [

        'linha_id',
        'hora_id',
        'modalidade_id',
        'epoca_id',
        'sentido_id',
        'etinerario_id',

    ];

}
