<?php

namespace App\Model;

use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class PlansClients extends Authenticatable 
{

	protected $table = 'tb_plans_clients';
	protected $primaryKey  = 'plan_client_id';
	protected $fillable  = 
	['plan_id', 'client_id','validate','date_block','date_recurrent','type_cicle','status', 'created_at','updated_at'];
    


    public function status()
    {   
        switch ($this->status) {
            case '5':
            return 'Bloqueado';
            break;
            case '4':
            return 'Cancelado';
            break;
            case '3':
            return 'Expirado/Vencido';
            break;
            case '2':
            return 'Pendente';
            break;
            case '1':
            return 'Ativo';
            break;
        }
    }

    public function typleCicle()
    {
        switch ($this->type_cicle) {
            case '3':
            return 'Anual';
            break;
            case '2':
            return 'Trimestral';
            break;
            case '1':
            return 'Mensal';
            break;
        }        
    }

    public function percentage()
    {

        switch ($this->type_cicle) {
            case '3':
            return '-15%';
            break;
            case '2':
            return '-5%';
            break;
            case '1':
            return '';
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