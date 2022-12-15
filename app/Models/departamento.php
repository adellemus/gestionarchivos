<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    use HasFactory;

    public function categorias()
    {
<<<<<<< HEAD
        return $this->hasMany('App\Models\categoria', 'departamento_id', 'id');
    }
=======
        return $this->hasMany('App\Models\categoria');
    }
    public function users()
    {
        return $this->belongsToMany('App\Models\user');
    }

>>>>>>> archivos

}
