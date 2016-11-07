<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    protected $table = 'work_order';

    public function comments()
    {
        return $this->hasMany(WorkOrderComment::class);
    }
}
