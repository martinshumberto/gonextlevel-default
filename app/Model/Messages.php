<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table      = "tb_messages";
	protected $primaryKey = 'message_id';
	protected $fillable   = ['from_id', 'to_id', 'message', 'status', 'created_at','updated_at'];


	public function fromClient()
    {
        return $this->hasOne('App\Model\Clients', 'client_id', 'from_id');
    }

	public function toClient()
    {
        return $this->hasOne('App\Model\Clients', 'client_id', 'to_id');
    }

    public function status()
    {   
        switch ($this->status) {
            case '2':
            return 'Lida';
            break;
            case '1':
            return 'Não Lida';
            break;
        }
    }



}
