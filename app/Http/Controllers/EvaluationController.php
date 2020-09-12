<?php

namespace App\Http\Controllers;


use App\Evaluation;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation $evaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluation $evaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluation $evaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation $evaluation)
    {
        //
    }

    public function saveData(Request $request){
        try {
            $rules = ['pregunta1'=>'required',
                      'pregunta2'=>'required',
                      'pregunta3'=>'required',
                      'pregunta4'=>'required',
                      'pregunta5'=>'required',
                      'pregunta6'=>'required',
                      'pregunta7'=>'required',
                      'pregunta8'=>'required',
                      'pregunta9'=>'required',
                      'pregunta10'=>'required',
             ];

            $validator = Validator::make($request->all(), $rules);
            
            if($validator->fails()){
                 // handler errors
                $erros = $validator->errors();
                return redirect()->back()->with('alert', 'No deje preguntas vacías');
            }
            $pregunta1=$request->input("pregunta1");
            $pregunta2=$request->input("pregunta2");
            $pregunta3=$request->input("pregunta3");
            $pregunta4=$request->input("pregunta4");
            $pregunta5=$request->input("pregunta5");
            $pregunta6=$request->input("pregunta6");
            $pregunta7=$request->input("pregunta7");
            $pregunta8=$request->input("pregunta8");
            $pregunta9=$request->input("pregunta9");
            $pregunta10=$request->input("pregunta10");
            
            $evaluation = DB::table('evaluations')->get()[0];
            
            $contador = 0;
            
            if ($pregunta1 == $evaluation->pregunta1){
                $contador = $contador +1;
            }

            if ($pregunta2 == $evaluation->pregunta2){
                $contador = $contador +1;
            }

            if ($pregunta3 == $evaluation->pregunta3){
                $contador = $contador +1;
            }

            if ($pregunta4 == $evaluation->pregunta4){
                $contador = $contador +1;
            }

            if ($pregunta5 == $evaluation->pregunta5){
                $contador = $contador +1;
            }

            if ($pregunta6 == $evaluation->pregunta6){
                $contador = $contador +1;
            }

            if ($pregunta7 == $evaluation->pregunta7){
                $contador = $contador +1;
            }
            
            if ($pregunta8 == $evaluation->pregunta8){
                $contador = $contador +1;
            }

            if ($pregunta9 == $evaluation->pregunta9){
                $contador = $contador +1;
            }

            if ($pregunta10 == $evaluation->pregunta10){
                $contador = $contador +1;
            }
            
            return view('results',compact('contador'));

        } catch (Exception $ex) {
            return redirect()->back()->with('alert', 'Hubo un error, contactese con el administrador');
        }
    }
}
