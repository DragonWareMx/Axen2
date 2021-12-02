<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class VisitorController extends Controller
{
    //
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nombre' => ['required','max:100', 'regex:/^[A-Za-z0-9À-ÖØ-öø-ÿ_! \"#$%&\'()*+,\-.\\:\/;=?@^_]+$/'],
            'email' => 'required|email|unique:visitors',
            'telefono'=> ['nullable','max:15','regex:/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.0-9]*$/i','min:10'],
            'referencia' => ['nullable','max:100', 'regex:/^[A-Za-z0-9À-ÖØ-öø-ÿ_! \"#$%&\'()*+,\-.\\:\/;=?@^_]+$/'],
            'sucursal' => ['required','max:100', 'regex:/^[A-Za-z0-9À-ÖØ-öø-ÿ_! \"#$%&\'()*+,\-.\\:\/;=?@^_]+$/'],
        ]);

        DB::beginTransaction();
        try {
            $visitor = new Visitor();
            $visitor->nombre = $request->nombre;
            $visitor->email = $request->email;
            $visitor->telefono = $request->telefono;
            $visitor->sucursal = $request->sucursal;

            if($request->referencia)
            $visitor->referencia = $request->referencia;

            if($request->avatar)
            $visitor->avatar = true;
            if($request->avatrading)
            $visitor->avatrading = true;
            if($request->curso_solvencia)
            $visitor->curso_solvencia = true;
            if($request->dinero_espiritual)
            $visitor->dinero_espiritual = true;
            if($request->informacion == "false")
            $visitor->avatar = false;

            $visitor->save();
            DB::commit();
            return Redirect::route('registro')->with('success','¡Tu visita se ha registrado exitosamente!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();


            return Redirect::route('registro')->with('error','Ha ocurrido un error con su solicitud, inténtelo de nuevo más tarde');
        }
    }
}
