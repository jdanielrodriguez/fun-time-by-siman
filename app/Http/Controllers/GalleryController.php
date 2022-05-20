<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Galeria;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index(Request $request)
    {





        if (!$request->ajax()) return redirect('/');
        // $galeria = new Galeria();


        $galeria = Galeria::where('estado', '=', '1')
            ->select('id', 'image')
            ->orderBy('id', 'desc')->get();

        return ['galeria' => $galeria];
    }


    public function video(Request $request)
    {





         if (!$request->ajax()) return redirect('/');


        $id = $request->galeria;




        $video = Galeria::where('id', '=', $id)
            ->select('video', 'id')->get(1);

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

        if ($request->img == "null" || $request->img == "") {
        } else {


            $exploded = explode(',', $request->img);
            $decoded = base64_decode($exploded[1]);

            if (str_contains($exploded[0], 'jpeg')) {
                $extension = 'jpeg';
            } else if (str_contains($exploded[0], 'jpg')) {
                $extension = 'jpg';
            } else {
                $extension = 'png';
            }

            $fileName = $generarnombre . $hora . '.' . $extension;
            $path = public_path() . '/img/' . $fileName;


            file_put_contents($path, $decoded);
        }

        /*** video */


        if ($request->video == "null" || $request->video == "") {
        } else {

            // 5242880 // 5MB
            $maxsize = 55242880; // 50mb

            $exploded = explode(',', $request->video);


            $decoded = base64_decode($exploded[1]);

            if (str_contains($exploded[0], 'mp4')) {
                $extension = 'mp4';
            } else if (str_contains($exploded[0], 'avi')) {
                $extension = 'mpeg';
            } else {
                $extension = 'mov';
            }



            $fileNameVideo = $generarnombre . $hora . '.' . $extension;
            $path = public_path() . '/video/' . $fileNameVideo;


            file_put_contents($path, $decoded);
        }



        $galeria = new Galeria();


        $galeria->nombre = $request->nombre;
        $galeria->dpi = $request->dpi;
        $galeria->fecha_hora = $time;
        $galeria->telefono = $request->telefono;
        $galeria->correo = $request->correo;
        $galeria->participante = $request->participante;
        $galeria->grupo = $request->grupo;
        $galeria->image = $fileName;
        $galeria->video = $fileNameVideo;
        $galeria->estado = '1';


        $galeria->save();
    }



    public function obtenerVideo(Request $request)
    {



        if (!$request->ajax()) return redirect('/');
        $galeria = new Galeria();
    }
}
