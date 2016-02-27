<?php

namespace bustime\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Modalidade extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [

        'modalidade'
    ];

}
