<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Galeria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class GalleryController extends Controller
{
    public function index(Request $request)
    {





        if (!$request->ajax()) return redirect('/');
        // $galeria = new Galeria();


        $galeria = Galeria::where('estado', '=', '1')
            ->select('id', 'image', 'participante')
            ->orderBy('id', 'desc')->get();

        return ['galeria' => $galeria];
    }


    public function video(Request $request)
    {





         if (!$request->ajax()) return redirect('/');


        $id = $request->galeria;




        $video = Galeria::where('id', '=', $id)
            ->select('video', 'id', 'participante')->get(1);

        //return $video[0]->video;

        return ['video' => $video];
    }


    public function store(Request $request)
    {



        if (!$request->ajax()) return redirect('/');



        $mytime = Carbon::now('America/Guatemala');

        $time = $mytime->format('y-m-d h:i:s');

        $hora = $mytime->format('his');

        /*** image */

        $generarnombre = $request->participante;
        $correo = $request->correo;

        // if ($request->img == "null" || $request->img == "") {
        // } else {


        //     $exploded = explode(',', $request->img);
        //     $decoded = base64_decode($exploded[1]);

        //     if (str_contains($exploded[0], 'jpeg')) {
        //         $extension = 'jpeg';
        //     } else if (str_contains($exploded[0], 'jpg')) {
        //         $extension = 'jpg';
        //     } else {
        //         $extension = 'png';
        //     }

        //     $fileName = $generarnombre . $hora . '.' . $extension;
        //     $path = public_path() . '/img/' . $fileName;


        //     file_put_contents($path, $decoded);
        // }

        // /*** video */


        // if ($request->video == "null" || $request->video == "") {
        // } else {

        //     // 5242880 // 5MB
        //     $maxsize = 5524288;

        //     $explodedv = explode(',', $request->video);
        //     $decodedv = base64_decode($explodedv[1]);
        //          $extension="";
        //          if (str_contains($exploded[0], 'mp4')) {
        //             $extension = 'mp4';
        //         } else if (str_contains($exploded[0], 'mov')) {
        //             $extension = 'mp4';
        //         } else {
        //             $extension = 'mp4';
        //         }


        //     $fileNameVideo = $generarnombre . $hora . '.' . $extension;
        //     $pathv = public_path() . '/video/' . $fileNameVideo;


        //     file_put_contents($pathv, $decodedv);
        // }



        $galeria = new Galeria();


        $galeria->nombre = $request->nombre;
        $galeria->apellido = $request->apellido;
        $galeria->dpi = $request->dpi;
        $galeria->fecha_hora = $time;
        $galeria->telefono = $request->telefono;
        $galeria->correo = $request->correo;
        $galeria->participante = $request->participante;
        $galeria->grupo = $request->grupo;
        $galeria->image = '';
        $galeria->video = '';
        $galeria->estado = '1';


        $galeria->save();

      $contenido = $request;

      /*** email  */

   /****  correo destino */
    //Mail::to($correo)->send(New MessageReceived($contenido));


    }



    public function obtenerVideo(Request $request)
    {



        if (!$request->ajax()) return redirect('/');
        $galeria = new Galeria();
    }


    public function validar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');

        $dpi = $request->dpi;


        if (Galeria::where('dpi', $dpi)->first()) {
            return 'Existe';
        } else {
            return 'No';
        }
    }




    public function validarGrupo(Request $request)
    {
        if (!$request->ajax()) return redirect('/');

        $grupo = $request->grupo;


        if (Galeria::where('grupo', $grupo)->count()>=20) {
            return 'El grupo esta lleno';
        } else {
            return 'No';
        }
    }




    public function cantidadGrupo(Request $request)
    {
        if (!$request->ajax()) return redirect('/');

        $grupo = $request->grupo;
        return Galeria::where('grupo', $grupo)->count();
    }
}
