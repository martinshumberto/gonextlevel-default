<?php

namespace App\Model;

use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class Discounts extends Authenticatable 
{

	protected $table = 'tb_discounts';
	protected $primaryKey  = 'discount_id';
	protected $fillable  = 
	['title', 'type', 'value', 'amount','amount_client', 'validate','discount_code','status', 'created_at','updated_at'];

    public function type()
    {   
        switch ($this->type) {
            case '2':
            return 'Valor';
            break;
            case '1':
            return 'Porcentagem';
            break;
        }
    }


    public function status()
    {   
        switch ($this->status) {
            case '2':
            return 'Inativo';
            break;
            case '1':
            return 'Ativo';
            break;
        }
    }
    
    public function price()
    {
        if($this->price > 0){
            return number_format($this->price, 2, ',', '.');
        }else{
            return "GRATIS";
        }
    }

    public function DiscountsClients()
    {
        return $this->hasMany('App\Model\DiscountsClients', 'client_id');
    }

    
}