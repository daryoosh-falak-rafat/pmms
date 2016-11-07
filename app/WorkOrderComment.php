<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOrderComment extends Model
{
    protected $table = 'work_order_comment';
    protected $fillable = ['comment'];

    public function workOrder()
    {
        return $this->belongsTo(WorkOrder::class);
    }
}
