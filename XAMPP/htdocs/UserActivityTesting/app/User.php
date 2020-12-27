<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function CustomerOfMine()
    {

        return $this->belongsToMany('App\Customer');
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
