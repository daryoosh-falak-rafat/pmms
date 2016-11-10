<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOrderComment extends Model
{
    protected $table = 'work_order_comment';
    protected $fillable = ['comment', 'user_id'];

    public function workOrder()
    {
        return $this->belongsTo(WorkOrder::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
