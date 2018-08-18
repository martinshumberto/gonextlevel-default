<?php

namespace App\Model;

use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

use Illuminate\Support\Facades\Hash;

class Clients extends Authenticatable 
{

	protected $table = 'tb_clients';
	protected $primaryKey  = 'client_id';
	protected $fillable  = 
	['moip_id','name', 'cpf','email','login','password','phone','birthdate','hinode_id',
    'states_id','cities_id', 'district', 'address', 'number', 'zipcode', 'status', 'stage','remember_token','created_at','updated_at'];
    
    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = Hash::make($password);
    }

    # Formata de Fora para o Banco;
    public function setBirthdateAttribute($birthdate)
    {
        $this->attributes['birthdate'] = Carbon::createFromFormat('d/m/Y', $birthdate)->format('Y-m-d');
    }

    # Formata do Banco para Fora;
    public function getBirthdateAttribute($birthdate)
    {
       return Carbon::createFromFormat('Y-m-d', $birthdate)->format('d/m/Y');
    }


    public function status()
    {   
        switch ($this->status) {
            case '3':
            return 'Bloqueado';
            break;
            case '2':
            return 'Inativo';
            break;
            case '1':
            return 'Ativo';
            break;
            case '0':
            return 'Não Verificado';
            break;
        }
    }

    public function statusColor()
    {   
        switch ($this->status) {
            case '4':
            return 'dark';
            break;
            case '3':
            return 'danger';
            break;
            case '2':
            return 'sucess';
            break;
            case '1':
            return 'success';
            break;
            case '0':
            return 'warning';
            break;
        }
    }

    public function stage()
    {   
        switch ($this->stage) {
            case '4':
            return 'Adamante';
            break;
            case '3':
            return 'Platina';
            break;
            case '2':
            return 'Diamante';
            break;
            case '1':
            return 'Consultor';
            break;
            case '0':
            return 'Usuário';
            break;
        }
    }
    
    public function prospect()
    {
        return $this->hasMany('App\Model\Prospects', 'client_id');
    }
    
    public function clientActivityLog()
    {
        return $this->hasMany('App\Model\ActivityLog', 'client_id');
    }
    
    public function PlanClient()
    {
        return $this->hasOne('App\Model\PlansClients', 'client_id');
    }

    public function Inovices()
    {
        return $this->hasMany('App\Model\Inovices', 'client_id');
    }
    public function discount()
    {
        return $this->belongsTo('App\Model\DiscountsClients', 'client_id', 'client_id');
    }


    public function citie()
    {
        return $this->hasOne('App\Model\Cities', 'cities_id', 'cities_id');
    }
    public function state()
    {
        return $this->hasOne('App\Model\States', 'states_id', 'states_id');
    }

}