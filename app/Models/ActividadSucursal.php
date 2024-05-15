<?php

namespace App\Models;

use App\Models\Sucursal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ActividadSucursal extends Model
{
    use HasFactory;

    // !! Global variables
    protected $table = 'actividad_de_sucursales';
    protected $guarded = ['id'];
    //protected $timestamps = false;
    //protected $primaryKey = [];
    //protected $casts = [];
    //protected $fillable = [];
    //protected $appends = [];
    //protected $hidden = [];
    //protected $dates =  [];

    // !! Functions
    // !! Relations

    public function  sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'sucursal_id', 'id');
    }

    // !! Scopes
    // !! Accessors
    // !! Mutators

}
