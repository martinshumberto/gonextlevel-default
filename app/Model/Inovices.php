<?php

namespace App\Model;

use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class Inovices extends Authenticatable 
{

	protected $table = 'tb_inovices';
	protected $primaryKey  = 'inovice_id';
	protected $fillable  = 
	['plan_id', 'client_id','type','gateway','gateway_key', 'gateway_response', 'status', 'created_at','updated_at'];

    public function status()
    {   
        switch ($this->status) {
            case '4':
            return 'Cancelado';
            break;
            case '3':
            return 'Expirado/Vencido';
            break;
            case '2':
            return 'Pedente';
            break;
            case '1':
            return 'Paga';
            break;
        }
    }

    public function Plan()
    {
        return $this->belongsTo('App\Model\Plans', 'plan_id');
    }    
    public function Client()
    {
        return $this->belongsTo('App\Model\Clients', 'client_id');
    }


}