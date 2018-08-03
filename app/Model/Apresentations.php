<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Apresentations extends Authenticatable 
{

	protected $table = 'tb_apresentations';
	protected $primaryKey  = 'apresentation_id';
	protected $fillable  = 
	['prospect_id','client_id','locate','date','hour','status','created_at','updated_at'];


    public function status()
    {   
        switch ($this->status) {
            case '5':
            return 'Vencida';
            break;
            case '4':
            return 'Remarcada';
            break;
            case '3':
            return 'Nao Realizada';
            break;
            case '2':
            return 'Realizada';
            break;
            case '1':
            return 'Marcada';
            break;
        }
    }    
    public function apresentation()
    {
        return $this->belongsTo('App\Model\Prospects', 'prospect_id', 'prospect_id');
    }


}