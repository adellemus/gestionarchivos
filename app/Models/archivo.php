<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class archivo extends Model
{

    use HasFactory;
<<<<<<< HEAD

   

    public function usuario()
    {
       
        return $this->belongsTo('App\Models\user','user_id','id');
    }
=======
    protected $fillable = ['url','name','extencion'];

        //relacion invertida n-1 con departamento
        public function categoria()
        {
            return $this->belongsTo('App\Models\categoria');
        }
        public function users()
        {
            return $this->belongsToMany('App\Models\user');
        }



>>>>>>> archivos
}
