<?php
namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use http\Url;

use model\Acceso;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Support\Facades\DB;




class DataExportController implements FromView
{
    use Exportable;
    public function view(): View
    {
        try {


            $datos =  DB::select('Select eu.id , u.nombre , u.rut , u.sap ,
                        eu.puntaje_obtenido , eu.puntaje_total_prueba , eu.created_at
                         FROM evaluation_user eu, users u where eu.usr_id = u.id');


            return view('data', [
                'datos' => $datos
            ]);
        }
        catch(Exception $e) {
            return view('Acceso.data');
        }
    }
}
