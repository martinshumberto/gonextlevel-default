<?php

namespace App\Model;

use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class Plans extends Authenticatable 
{

	protected $table = 'tb_plans';
	protected $primaryKey  = 'plan_id';
	protected $fillable  = 
	['title', 'title_small','featured', 'text','modules','price','validate','status', 'created_at','updated_at'];



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

    public function modules()
    {
        $functions = array(
            "a" => "Gestor de prospectos",
            "b" => "Captação de prospectos",
            "c" => "Acompanhamento de prospectos",
            "d" => "Relatórios de prospecções",
            "e" => "Central de treinamentos",
            "f" => "Materiais de apoio",
            "g" => "Chat com sua equipe",
            "h" => "Gestor de agenda",
            "i" => "Gestor de equipe",
            "j" => "Grupos de equipe",
            "k" => "Personalização de e-mail marketing",
        );

        return $functions;
    }
    public function price()
    {
        if($this->price > 0){
            return number_format($this->price, 2, ',', '.');
        }else{
            return "GRATIS";
        }
    }
    
    public function PlansClients()
    {
        return $this->hasMany('App\Model\PlansClients', 'plan_id');
    }
    
    public function Inovices()
    {
        return $this->hasMany('App\Model\Inovices', 'plan_id');
    }



}