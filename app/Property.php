<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';
    protected $fillable = ['address_line_1', 'address_line_2', 'postcode', 'town', 'configuration'];

    public function workOrders()
    {
        return $this->hasMany(WorkOrder::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
