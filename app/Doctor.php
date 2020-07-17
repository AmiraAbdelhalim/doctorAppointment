<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable 
{
    //
    protected $guard='doctor';
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_num',
        'specialization_id'
    ];

    public function specialization(){
        return $this->BelongsTo('App\Specialization');
    }
}
