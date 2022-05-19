<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index(Request $request)
    {



        if (!$request->ajax()) return redirect('/');



    }


    public function store(Request $request)
    {


        if (!$request->ajax()) return redirect('/');

        $mytime = Carbon::now('America/Guatemala');

        $mytime = $mytime->format('y-m-d h:i:s');


        /*** image */
       /*** video */

        $galeria = new Gallery();

        $galeria->fecha_hora = $mytime;
        $galeria->nombre = $request->nombre;
        $galeria->dpi = $request->dpi;
        $galeria->telefono = $request->telefono;
        $galeria->correo = $request->correo;
        $galeria->participante = $request->participante;
        $galeria->img = $request->img;
        $galeria->video = $request->video;
        $galeria->estado = '1';


        $galeria->save();





    }
}
