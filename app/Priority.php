<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    protected $table = 'priority';

    public function workOrder()
    {
        return $this->hasMany(WorkOrder::class);
    }
}
