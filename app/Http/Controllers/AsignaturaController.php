<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;
use Illuminate\Support\Facades\Auth;

class AsignaturaController extends Controller
{
    protected $asignatura;

    public function __construct(Asignatura $asignatura)
    {
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
        $asignatura = $this->asignatura->obtenerAsignaturasPorUsuario($id);
        return view("asignaturas", ["asignaturas" => $asignatura]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("asignaturas.create");
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
            "nombreAs" => ["required", "min:3"],
            "nombreCortoAs" => ["required", "max:5"],
            "profesorAs" => "required",
            "colorAs" => "required"
        ]);

        $lastID = $this->asignatura->obtenerUltimoID();

        $asignatura = new Asignatura([
            "user_id" => Auth::user()->id,
            "codAs" => $lastID->codAs + 1,
            "nombreAs" => $request->nombreAs,
            "nombreCortoAs" => $request->nombreCortoAs,
            "profesorAs" => $request->profesorAs,
            "colorAs" => $request->colorAs
        ]);
        $asignatura->save();
        return redirect()->action([AsignaturaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignatura = $this->asignatura->obtenerAsignatura($id);
        return view("asignaturas.show", ["asignatura" => $asignatura]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignatura = $this->asignatura->obtenerAsignatura($id);
        return view("asignaturas.edit", ["asignatura" => $asignatura]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asignatura = $this->asignatura->obtenerAsignatura($id);
        $asignatura->nombreAs = $request->nombreAs;
        $asignatura->nombreCortoAs = $request->nombreCortoAs;
        $asignatura->profesorAs = $request->profesorAs;
        $asignatura->colorAs = $request->colorAs;
        $asignatura->save();
        return redirect()->action([AsignaturaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asignatura = $this->asignatura->obtenerAsignatura($id);
        $asignatura->delete();
        return redirect()->action([AsignaturaController::class, 'index']);
    }
}
