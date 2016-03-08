<?php

namespace App\Repositories;

use App\User;
use App\Investigadores;
use App\Areas;

/**
* 
*/
class AsignadosRepository
{
	
	public function allInvestigadores()
	{
		return Investigadores::get();
	}
}
?>