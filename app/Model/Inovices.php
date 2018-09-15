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
	['plan_id', 'client_id', 'price', 'type','gateway','gateway_key', 'gateway_response', 'discount_code','_cardNumber', '_fullName', '_brand', 'status','update', 'created_at','updated_at'];

    public function status()
    {   
        switch ($this->status) {
            case '6':
            return 'Estornado';
            break;
            case '5':
            return 'Reembolso';
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
            return 'Paga';
            break;
        }
    }
    public function type()
    {   
        switch ($this->type) {
            case '2':
            return 'Boleto Bancario';
            break;
            case '1':
            return 'Cartão de Credito';
            break;
        }
    }

    public function colorTarget()
    {   
        switch ($this->status) {
            case '6':
            return 'yellow';
            break;
            case '5':
            return 'green';
            break;
            case '4':
            return 'red';
            break;
            case '3':
            return 'red';
            break;
            case '2':
            return 'yellow';
            break;
            case '1':
            return 'green';
            break;
        }
    }

    public function brand()
    {   
        switch ($this->_brand) {
            case 'DINERS':
            return 'cc-diners-club';
            break;
            case 'AMEX':
            return 'cc-amex';
            break;
            case 'VISA':
            return 'cc-visa';
            break;
            case 'MASTERCARD':
            return 'cc-mastercard';
            break;
        }
    }
    public function price()
    {
        if($this->price > 0){
            return "R$".number_format($this->price/100,2,'.',',');
        }else{
            return "GRATIS";
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