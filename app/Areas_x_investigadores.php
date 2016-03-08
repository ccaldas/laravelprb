<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas_x_investigadores extends Model
{
    //
    protected $table = 'areas_x_investigadores';
    protected $fillable = ['fk_idareas','fk_idinvestigadores'];
}
