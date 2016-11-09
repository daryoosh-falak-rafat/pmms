<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';

    public function workOrders()
    {
        return $this->hasMany(WorkOrder::class);
    }
}
