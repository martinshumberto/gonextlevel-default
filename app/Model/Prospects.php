<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Prospects extends Authenticatable 
{

	protected $table = 'tb_prospects';
	protected $primaryKey  = 'prospect_id';
	protected $fillable  = 
	['client_id','name','phone','email','network','credibility','entrepreneur','energy','dreamer',
    'resource','contact', 'status','stage','created_at','updated_at'];



    public function count_pont()
    {
        $one = $this->network;
        $two = $this->credibility;
        $tree = $this->entrepreneur;
        $four = $this->energy;
        $five = $this->dreamer;
        $six = $this->resource;

        $total = $one + $two + $tree + $four + $five + $six;

        return $total;
    }

    public function status()
    {   
        switch ($this->status) {
            case '4':
            return 'Perdido';
            break;
            case '3':
            return 'Concluido';
            break;
            case '2':
            return 'Arquivado';
            break;
            case '1':
            return 'Ativo';
            break;
            case '0':
            return 'Inativo';
            break;
        }
    }    
    public function color(){
        switch ($this->status) {
            case '4':
            $color = "red";
            break;
            case '3':
            $color = "green";
            break;
            case '2':
            $color = "yellow";
            break;
            case '1':
            $color = "green";
            break;
        }
        return $color;
    }
    public function stage()
    {   
        switch ($this->stage) {
            case '4':
            return 'Fechamento';
            break;
            case '3':
            return 'Acompanhar';
            break;
            case '2':
            return 'Apresentar';
            break;
            case '1':
            return 'Convidar';
            break;
        }
    }
    public function client()
    {
        return $this->belongsTo('App\Model\Clients', 'client_id', 'client_id');
    }
    public function apresentation()
    {
        return $this->hasMany('App\Model\Apresentations', 'prospect_id', 'prospect_id');
    }


}