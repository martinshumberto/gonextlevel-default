<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $table      = "tb_activity_log";
	protected $primaryKey = 'activity_id';
	protected $fillable   = ['client_id', 'text', 'ip', 'action', 'created_at', 'updated_at'];


	public function clientActivityLog()
    {
        return $this->hasOne('App\Model\Clients', 'client_id', 'client_id');
    }

    public function action()
    {

    	$acao = explode(':', $this->action);

    	switch ($acao[0]) {
            case 'P':
            $module = "Prospecto";
            break;
            case 'PP':
            $module = "Pipeline de Prospect";
            break;
            case 'A':
            $module = "Apresentacao";
            break;
        }

    	switch ($acao[1]) {
            case 'C':
            $acao = "Criado";
            break;
            case 'U':
            $acao = "Alterado";
            break;
            case 'D':
            $acao = "Excluido";
            break;
            case 'M':
            $acao = "Movido";
            break;
        }

        return $module . " " . $acao;
    }
    /*
	Explicacao
		Gravado no Banco
		Campo {_action_}
			%Modulo%:%Acao%:%Id%
			------------
			[Modulos]
            P = prospect
			 - PP = Pipeline de prospecto
			A = apresentacao

			[Acoes]
			C = Criado
			U = Alterado
			D = Deletado

			[Id]
			id do Registro refente a acao
    */

}
