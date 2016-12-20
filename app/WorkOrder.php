<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    /**
     * laravel would look for the model name plural so we tell it to look for this table name instead
     * @var string
     */
    protected $table = 'work_order';

    protected $fillable = ['property_id', 'description', 'priority_id', 'completed_date'];

    /**
     * one to many relationship between work orders and work order comments. A workOrder may have many comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(WorkOrderComment::class);
    }

    /**
     * one to many relationship between properties and work orders. A property may have many work orders
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }
}
