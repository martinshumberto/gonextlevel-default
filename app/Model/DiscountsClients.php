<?php

namespace App\Model;

use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class DiscountsClients extends Authenticatable 
{

	protected $table = 'tb_discounts_clients';
	protected $primaryKey  = 'discount_client_id';
	protected $fillable  = 
	['discount_id', 'client_id', 'plan_id', 'discount_code', 'discount_type', 'discount_price','status', 'created_at','updated_at'];

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
	public function type()
	{   
		switch ($this->discount_type) {
			case '2':
			return 'Valor';
			break;
			case '1':
			return 'Porcentagem';
			break;
		}
	}

	public function clients()
	{
		return $this->hasMany('App\Model\Clients', 'client_id' , 'client_id');
	}

	public function discount()
	{
		return $this->belongsTo('App\Model\Discounts', 'discount_id', 'discount_id');
	}




}