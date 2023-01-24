<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'asignaturas';
    protected $primaryKey = 'codAs';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'nombreAs',
        'nombreCortoAs',
        'profesorAs',
        'colorAs'
    ];

    protected $hidden = [
        'codAs'
    ];

    public function obtenerAsignatura($id){
        return Asignatura::find($id);
    }

    public function obtenerAsignaturasPorUsuario($id)
    {
        return Asignatura::where('user_id', $id)->get();
    }

    public function obtenerUltimoID()
    {
        return Asignatura::orderBy('codAs', 'desc')->first();
    }

    public function obtenerAsignaturaPorDiaHora($dia, $hora)
    {
        $id = Auth::user()->id;
        $query = DB::table('horas')
            ->join('asignaturas', 'horas.codigoAs', '=', 'asignaturas.codAs')
            ->where('asignaturas.user_id', $id)
            ->where('horas.diaH', $dia)
            ->where('horas.horaH', $hora)
            ->first();
        return $query;
    }

    public function horas(){
        return $this->hasMany(Hora::class, 'codigoAs', 'codAs');
    }
}
