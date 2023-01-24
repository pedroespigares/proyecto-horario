<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hora;
use App\Models\Asignatura;
use Illuminate\Support\Facades\Auth;

class HoraController extends Controller
{
    protected $hora;
    protected $asignatura;

    public function __construct(Hora $hora, Asignatura $asignatura)
    {
        $this->hora = $hora;
        $this->asignatura = $asignatura;
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $asignaturaElegida = request('asignatura');
        if($asignaturaElegida == 0)
            $query = $this->hora->obtenerHoras($id);
        else
            $query = $this->hora->obtenerHorasPorAsignatura($id, $asignaturaElegida);
        $asignaturas = $this->asignatura->obtenerAsignaturasPorUsuario($id);
        return view("horas", ["horas" => $query, "asignaturas" => $asignaturas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $asignaturas = $this->asignatura->obtenerAsignaturasPorUsuario($id);
        return view("horas.create",["asignaturas" => $asignaturas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "diaH" => "required",
            "horaH" => "required",
            "codigoAs" => "required"
        ]);

        $hora = new Hora([
            "diaH" => $request->get("diaH"),
            "horaH" => $request->get("horaH"),
            "codigoAs" => $request->get("codigoAs")
        ]);

        $hora->save();

        return redirect()->action([HoraController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($dia, $hora)
    {
        $id = Auth::user()->id;
        $query = $this -> hora -> obtenerHora($id, $dia, $hora);
        $hora = $query[0];
        return view("horas.show", ["hora" => $hora]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($dia, $hora)
    {
        $id = Auth::user()->id;
        $asignaturas = $this->asignatura->obtenerAsignaturasPorUsuario($id);
        $hora = $this->hora->obtenerHora($id, $dia, $hora);
        $hora = $hora[0];
        return view("horas.edit", ["hora" => $hora, "asignaturas" => $asignaturas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // ------------------------------------------------------------------------------------------------------------------------


    // ACLARACION SOBRE LAS FUNCIONES UPDATE Y DESTROY

    // Los metodos de elocuencia de laravel no funcionan para actualizar o eliminar registros con clave primaria compuesta
    // por lo que se utilizo el metodo DB::table() para realizar dichas acciones
    
    
    public function update(Request $request, $asignatura,$dia, $hora)
    {
        $id = Auth::user()->id;
        $request->validate([
            "diaH" => "required",
            "horaH" => "required",
            "codigoAs" => "required"
        ]);

        DB::table('horas')->where('diaH', $dia)->where('horaH', $hora)->where('codigoAs', $asignatura)->update([
            "diaH" => $request->get("diaH"),
            "horaH" => $request->get("horaH"),
            "codigoAs" => $request->get("codigoAs")
        ]);

        return redirect()->action([HoraController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($asignatura, $dia, $hora)
    {
        DB::table('horas')->where('diaH', $dia)->where('horaH', $hora)->where('codigoAs', $asignatura)->delete();
        return redirect()->action([HoraController::class, 'index']);
    }

    // ------------------------------------------------------------------------------------------------------------------------
}
