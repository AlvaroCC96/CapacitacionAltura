<?php

namespace App\Http\Controllers;


use App\Evaluation;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Freshwork\ChileanBundle\Rut;
use User;

class EvaluationController extends Controller
{
    public function saveData(Request $request){
        try {

            $idUser = $request->intid;

            $evaluation = DB::table('evaluations')->get()[0];
            $contador = 0;

            if ($request->input("pregunta1") != null) {
                if ($request->input("pregunta1") == $evaluation->pregunta1){
                    $contador = $contador +1;
                }
            }

            if ($request->input("pregunta2") !=null) {
                if ($request->input("pregunta2") == $evaluation->pregunta1){
                    $contador = $contador +1;
                }
            }

            if ($request->input("pregunta3") !=null) {
                if ($request->input("pregunta3") == $evaluation->pregunta1){
                    $contador = $contador +1;
                }
            }

            if ($request->input("pregunta4") !=null) {
                if ($request->input("pregunta4") == $evaluation->pregunta1){
                    $contador = $contador +1;
                }
            }

            if ($request->input("pregunta5") !=null) {
                if ($request->input("pregunta5") == $evaluation->pregunta1){
                    $contador = $contador +1;
                }
            }

            if ($request->input("pregunta6") !=null) {
                if ($request->input("pregunta6") == $evaluation->pregunta1){
                    $contador = $contador +1;
                }
            }

            if ($request->input("pregunta7") !=null) {
                if ($request->input("pregunta7") == $evaluation->pregunta1){
                    $contador = $contador +1;
                }
            }

            if ($request->input("pregunta8") !=null) {
                if ($request->input("pregunta8") == $evaluation->pregunta1){
                    $contador = $contador +1;
                }
            }

            if ($request->input("pregunta9") !=null) {
                if ($request->input("pregunta9") == $evaluation->pregunta1){
                    $contador = $contador +1;
                }
            }

            if ($request->input("pregunta10") !=null) {
                if ($request->input("pregunta10") == $evaluation->pregunta1){
                    $contador = $contador +1;
                }
            }

            $user1 = $data = DB::table('users')->where('rut', '94817943')->get();

            if(sizeof($user1) != 0 ) {
                DB::table('users')->where('rut', '94817943')->delete();
            } else {
                DB::table('evaluation_user')->insert(
                    array('usr_id' => $idUser,
                        'tst_id' => $evaluation->id,
                        'puntaje_obtenido' => $contador,
                        'puntaje_total_prueba'=>10,
                        "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                        "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
                    )
                );
            }

            return view('results',compact('contador'));

        } catch (Exception $ex) {
            return redirect()->back()->with('alert', 'Hubo un error, contactese con el administrador');
        }
    }
}
