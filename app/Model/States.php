<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $table      = "tb_states";
	protected $primaryKey = 'states_id';
	protected $fillable   = ['code', 'name'];


    public function cities()
    {
        return $this->hasMany('App\Model\Cities', 'states_id', 'states_id');
    }

    public function clients()
    {
        return $this->hasMany('App\Model\Clients', 'states_id');
    }

}
