<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/subir','StorageController@subirArchivo')->name('subir');

Route::get('/download/{archivo}', function ($archivo) {
    $public_path = public_path();
    $url = $public_path.'/uploads/nominas/pepe/'.$archivo;

    //verificamos si el archivo existe y lo retornamos
    if (file_exists(public_path('/uploads/nominas/pepe').'/'.$archivo))
    {
        return response()->download($url);
    }else{
        //si no se encuentra lanzamos un error 404.
        dd($url);

    }

});

Route::get('/listar', function(){

    $directorio = opendir(public_path('/uploads/nominas/juan')); //ruta actual
    while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
    {
        if (is_dir($archivo))//verificamos si es o no un directorio
        {
            echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
        }
        else
        {
            echo $archivo . "<br />";
        }
    }
});
