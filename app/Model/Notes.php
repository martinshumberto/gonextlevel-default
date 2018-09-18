<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Notes extends Authenticatable 
{

    protected $table = 'tb_notes';
    protected $primaryKey  = 'notes_id';
    protected $fillable  = 
    ['prospect_id','client_id','text','created_at','updated_at'];


    public function prospect()
    {
        return $this->belongsTo('App\Model\Prospects', 'prospect_id', 'prospect_id');
    }

    public function client()
    {
        return $this->belongsTo('App\Model\Clients', 'client_id', 'client_id');
    }


}