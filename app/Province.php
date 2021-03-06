<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = [
        'name'
    ];
    public function District()
    {
        return $this->hasMany('App\District','province_id');
    }
}
