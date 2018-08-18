<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table      = "tb_cities";
	protected $primaryKey = 'cities_id';
	protected $fillable   = ['states_id', 'name', 'cep'];


	public function state()
    {
        return $this->hasOne('App\Model\States', 'states_id', 'states_id');
    }


    public function clients()
    {
        return $this->hasMany('App\Model\Clients', 'cities_id');
    }

}
