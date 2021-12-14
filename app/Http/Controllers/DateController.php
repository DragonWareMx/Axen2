<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Date;
use App\Models\Developer;
use App\Models\Office;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DateController extends Controller
{
    //
    public function oficinas(){

        $oficinas = Office::get();

        return view('citas.oficinas', ['oficinas'=>$oficinas]);
    }

    public function createDev(){

        $oficinas = Office::get();

        return view('citas.createDev', ['oficinas'=>$oficinas]);
    }

    public function show(){

        $dates = Date::where('office_id', Auth::user()->office_id)
                ->whereDate('fecha','>=', Carbon::now())
                ->get();

        $old = false;
        return view('citas.show', ['citas'=>$dates, 'old' =>$old]);
    }

    public function showOld(){

        $dates = Date::where('office_id', Auth::user()->office_id)
                ->whereDate('fecha','<', Carbon::now())
                ->get();

        $old = true;
        return view('citas.show', ['citas'=>$dates, 'old' =>$old]);
    }

    public function developers(Request $request){

        $developers = Developer::where('office_id', $request->sucursal)->get();

        return view('citas.developers', ['developers'=>$developers]);
    }

    public function fechas(Request $request){

        $developer_id = $request->developer;
        $developer = Developer::find($developer_id);
        $servicio = $request->servicio;


        session(['developer'=> $developer->id, 'servicio'=> $servicio, 'oficina'=>$developer->office_id]);

        return view('citas.fechas', ['developer'=>$developer_id]);
    }

    public function horas(Request $request){

       if($request->fecha <= Carbon::today())
            return Redirect::route('cita.oficina')->with('error','Elige una fecha a partir de mañana');


        $citas = Date::where('office_id', session()->get('oficina'))
                ->whereDate('fecha', $request->fecha)
                ->get();

        session(['fecha'=> $request->fecha]);

        if(isset($citas[0])){
            return view('citas.horas', ['citas'=>$citas]);
        }
        else
        return view('citas.horas');
    }

    public function storeDev(Request $request){

        $validated = $request->validate([
            'nombre' => ['required','max:100', 'regex:/^[A-Za-z0-9À-ÖØ-öø-ÿ_! \"#$%&\'()*+,\-.\\:\/;=?@^_]+$/'],
            'email' => 'required|email|unique:developers',
            'telefono'=> ['nullable','max:15','regex:/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.0-9]*$/i','min:10', 'unique:developers'],
        ]);

        DB::beginTransaction();
        try {
            $developer = new Developer();
            $developer->nombre = $request->nombre;
            $developer->email = $request->email;
            $developer->telefono = $request->telefono;
            $developer->office_id =$request->sucursal;


            $developer->save();
            DB::commit();
            return Redirect::route('cita.oficina')->with('success','¡Te has registrado como devéloper!');
        } catch (\Throwable $th) {
            throw $th;
            DB::rollBack();
            return Redirect::back()->with('error','Ha ocurrido un error con su solicitud, inténtelo de nuevo más tarde');
        }
    }


    public function storeDate(Request $request){

        $validated = $request->validate([
            'hora' => 'required',
        ]);



        DB::beginTransaction();
        try {
            $cita = new Date();


            //verificamos que esta hora y fecha no existan
            if (Date::where([
                ['fecha', '=', session()->get('fecha')],
                ['hora', '=', $request->hora],
                ['office_id','=', session()->get('oficina')]
                ])
                ->first()
                ){
                    return Redirect::route('cita.oficina')->with('error','Esa fecha y hora ya están ocupadas, revisa la tabla antes de elegir');
                }

            //Si hay más citas en ese día, verificamos que la duración no choque
            if (Date::where([['fecha', '=', session()->get('fecha')], ['office_id','=', session()->get('oficina')]])->first()){

                if (session()->get('servicio') == 'Cuerpos en el local'){

                    $horaF = date ('H:i:s', strtotime ( '+30 minute' , strtotime ($request->hora) ));

                    if (Date::where([
                        ['fecha', '=', session()->get('fecha')],
                        ['hora', '=', $horaF],
                        ['office_id','=', session()->get('oficina')]
                        ])
                        ->first()
                        )
                        return Redirect::route('cita.oficina')->with('error','No hay espacio para tu cita. El tiempo para Cuerpos en el local es de una hora, considéralo');
                }
            }

            $cita->fecha = session()->get('fecha');
            $cita->hora = $request->hora;


            $cita->developer_id = session()->get('developer');
            $cita->office_id = session()->get('oficina');
            $cita->concepto =  session()->get('servicio');


            $cita->save();
            DB::commit();
            return Redirect::route('cita.oficina')->with('success','¡Tu cita ha quedado registrada!');
        } catch (\Throwable $th) {

            DB::rollBack();
            return Redirect::route('cita.oficina')->with('error','Tuvimos un problema con tu solicitud, inténtalo de nuevo más tarde');
        }
    }

    public function createAdmin(){


    }

    public function storeDateAdmin(Request $request){

    }
}
