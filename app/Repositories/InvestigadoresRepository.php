<?php

namespace App\Repositories;

use DB;
use App\User;
use App\Investigadores;

/**
* 
*/
class InvestigadoresRepository
{
	
	public function allInvestigadores()
	{
		return Investigadores::get();
	}
	public function forArea()
	{
		return DB::table('areas_x_investigadores')
			->join('areas', 'areas_x_investigadores.fk_idareas', '=', 'areas.id')
            ->join('investigadores', 'areas_x_investigadores.fk_idinvestigadores', '=', 'investigadores.id')
            ->select('areas_x_investigadores.id', 'investigadores.nombre', 'areas.area')
            ->get();
/*SELECT * from areas_x_investigadores axi INNER join areas a on axi.fk_idareas=a.id
INNER join investigadores i on axi.fk_idinvestigadores = i.id*/
	}
}
?>