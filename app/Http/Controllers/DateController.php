<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Date;
use App\Models\Developer;
use App\Models\Office;
use Database\Seeders\OfficeSeeder;

class DateController extends Controller
{
    //
    public function oficinas(){

        $oficinas = Office::get();

        return view('citas.oficinas', ['oficinas'=>$oficinas]);
    }

    public function developers(Request $request){

        $developers = Developer::where('office_id', $request->sucursal)->get();

        return view('citas.developers', ['developers'=>$developers]);
    }
}
