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


}
