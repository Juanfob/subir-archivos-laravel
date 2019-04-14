<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function subirArchivo(Request $request)
    {
        if ($request->hasFile('archivo')) {
            //obtenemos el campo file definido en el formulario
            $file = $request->file('archivo');

            //obtenemos el nombre del archivo
            $nombre = $file->getClientOriginalName();

            //indicamos que queremos guardar un nuevo archivo en el disco local
            //\Storage::disk('local')->put($nombre,  \File::get($file));
            $destination = public_path('/uploads/nominas/miguel') ;
            $request->file('archivo')->move($destination, $nombre);

            return "archivo guardado";
        }
    }
}
