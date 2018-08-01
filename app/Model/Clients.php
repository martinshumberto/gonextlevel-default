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
	['name', 'cpf','email','login','password','phone','birthdate','hinode_id',
    'states_id','cities_id', 'status', 'stage','remember_token','created_at','updated_at'];
    
    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = Hash::make($password);
    }

    public function setBirthdateAttribute($birthdate)
    {
        $this->attributes['birthdate'] = Carbon::parse($birthdate)->format('Y-m-d');
    }

    public function status()
    {   
        switch ($this->status) {
            case '4':
            return 'Bloqueado';
            break;
            case '3':
            return 'Inativo';
            break;
            case '2':
            return 'Ativo';
            break;
            case '1':
            return 'Verificado';
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
    /*
    public function prospect()
    {
        return $this->hasMany('App\Model\Prospects', 'user_id');
    }*/

}