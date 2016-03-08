<?php

namespace App\Repositories;

use App\User;
use App\Areas;

/**
* 
*/
class AreasRepository
{
	
	public function allAreas()
	{
		return Areas::get();
	}
}
?>