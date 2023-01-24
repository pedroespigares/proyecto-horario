<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Asignatura;

class HorarioController extends Controller
{
    protected $asignatura;
    // Este controlador se encarga de mostrar el horario del usuario
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Asignatura $asignatura)
    {
        $this->asignatura = $asignatura;
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::user()->id;
        // query para obtener todos los datos de la tabla horas y asignaturas

        $lunesPrimeraHora = $this->asignatura->obtenerAsignaturaPorDiaHora(1, 1);
        $lunesSegundaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(1, 2);
        $lunesTerceraHora = $this->asignatura->obtenerAsignaturaPorDiaHora(1, 3);
        $lunesCuartaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(1, 4);
        $lunesQuintaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(1, 5);
        $lunesSextaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(1, 6);

        $martesPrimeraHora = $this->asignatura->obtenerAsignaturaPorDiaHora(2, 1);
        $martesSegundaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(2, 2);
        $martesTerceraHora = $this->asignatura->obtenerAsignaturaPorDiaHora(2, 3);
        $martesCuartaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(2, 4);
        $martesQuintaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(2, 5);
        $martesSextaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(2, 6);

        $miercolesPrimeraHora = $this->asignatura->obtenerAsignaturaPorDiaHora(3, 1);
        $miercolesSegundaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(3, 2);
        $miercolesTerceraHora = $this->asignatura->obtenerAsignaturaPorDiaHora(3, 3);
        $miercolesCuartaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(3, 4);
        $miercolesQuintaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(3, 5);
        $miercolesSextaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(3, 6);

        $juevesPrimeraHora = $this->asignatura->obtenerAsignaturaPorDiaHora(4, 1);
        $juevesSegundaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(4, 2);
        $juevesTerceraHora = $this->asignatura->obtenerAsignaturaPorDiaHora(4, 3);
        $juevesCuartaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(4, 4);
        $juevesQuintaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(4, 5);
        $juevesSextaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(4, 6);

        $viernesPrimeraHora = $this->asignatura->obtenerAsignaturaPorDiaHora(5, 1);
        $viernesSegundaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(5, 2);
        $viernesTerceraHora = $this->asignatura->obtenerAsignaturaPorDiaHora(5, 3);
        $viernesCuartaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(5, 4);
        $viernesQuintaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(5, 5);
        $viernesSextaHora = $this->asignatura->obtenerAsignaturaPorDiaHora(5, 6);

        return view("dashboard", [
            "lunesPrimeraHora" => $lunesPrimeraHora,
            "lunesSegundaHora" => $lunesSegundaHora,
            "lunesTerceraHora" => $lunesTerceraHora,
            "lunesCuartaHora" => $lunesCuartaHora,
            "lunesQuintaHora" => $lunesQuintaHora,
            "lunesSextaHora" => $lunesSextaHora,

            "martesPrimeraHora" => $martesPrimeraHora,
            "martesSegundaHora" => $martesSegundaHora,
            "martesTerceraHora" => $martesTerceraHora,
            "martesCuartaHora" => $martesCuartaHora,
            "martesQuintaHora" => $martesQuintaHora,
            "martesSextaHora" => $martesSextaHora,

            "miercolesPrimeraHora" => $miercolesPrimeraHora,
            "miercolesSegundaHora" => $miercolesSegundaHora,
            "miercolesTerceraHora" => $miercolesTerceraHora,
            "miercolesCuartaHora" => $miercolesCuartaHora,
            "miercolesQuintaHora" => $miercolesQuintaHora,
            "miercolesSextaHora" => $miercolesSextaHora,

            "juevesPrimeraHora" => $juevesPrimeraHora,
            "juevesSegundaHora" => $juevesSegundaHora,
            "juevesTerceraHora" => $juevesTerceraHora,
            "juevesCuartaHora" => $juevesCuartaHora,
            "juevesQuintaHora" => $juevesQuintaHora,
            "juevesSextaHora" => $juevesSextaHora,

            "viernesPrimeraHora" => $viernesPrimeraHora,
            "viernesSegundaHora" => $viernesSegundaHora,
            "viernesTerceraHora" => $viernesTerceraHora,
            "viernesCuartaHora" => $viernesCuartaHora,
            "viernesQuintaHora" => $viernesQuintaHora,
            "viernesSextaHora" => $viernesSextaHora,
        ]);
        
    }
}
