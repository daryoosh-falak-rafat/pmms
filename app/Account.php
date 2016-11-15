<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';
    protected $fillable = ['name'];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
