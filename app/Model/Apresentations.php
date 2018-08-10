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
            case '4':
            return 'Realizada';
            break;
            case '3':
            return 'Nao Realizada';
            break;
            case '2':
            return 'Cancelada';
            break;
            case '1':
            return 'Marcada';
            break;
        }
    }

    public function color(){
        switch ($this->status) {
            case '4':
            $color = "green";
            break;
            case '3':
            $color = "red";
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

    public function tag(){
        switch ($this->status) {
            case '4':
            $color = "success";
            break;
            case '3':
            $color = "danger";
            break;
            case '2':
            $color = "warning";
            break;
            case '1':
            $color = "success";
            break;
        }
        return $color;
    }
    public function apresentation()
    {
        return $this->belongsTo('App\Model\Prospects', 'prospect_id', 'prospect_id');
    }


}