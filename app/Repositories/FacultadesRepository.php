<?php

namespace App\Repositories;

use App\User;
use App\Facultades;

/**
* 
*/
class FacultadesRepository
{
	
	public function allFacultades()
	{
		return Facultades::get();
	}
}
?>