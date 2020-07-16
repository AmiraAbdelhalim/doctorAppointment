<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PainList extends Model
{
    //
    protected $fillable = [
        'pain_type'
    ];

    public function user()
    {
        return $this->belongsTo('App\user');
    }

}
