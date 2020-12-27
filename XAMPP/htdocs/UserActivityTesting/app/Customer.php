<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'user_id', 'customer_id'

    ];

    public function CustomerOfMine()
    {
        return $this->belongsToMany('App\User', 'customers', 'customer_id', 'user_id');
    }
    public function CustomerOf()
    {
        return $this->belongsToMany('App\User', 'customers', 'user_id', 'customer_id');
    }

    public function customers()
    {
        return $this->CustomerOfMine->merge($this->CustomerOf);
    }
}
