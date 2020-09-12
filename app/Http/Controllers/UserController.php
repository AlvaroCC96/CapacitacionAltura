<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Freshwork\ChileanBundle\Rut;

class UserController extends Controller
{
    public function startSession(Request $request){

        try {
            
            $rutInput = $request->rut;

            if (!Rut::parse($rutInput)->isValid()) {
                return redirect()->back()->with('alert', 'Rut mal ingresado');
            }

            $rutFormated = Rut::parse($rutInput)->format(Rut::FORMAT_ESCAPED);

            $rules = ['rut'=>'required|unique:users',
            'sap'=>'required|unique:users' ];

            $validator = Validator::make($request->all(), $rules);
            
            if ($validator->fails()) {
                // handler errors
                $erros = $validator->errors();
                return redirect()->back()->with('alert', 'Error al ingresar datos, RUT o SAP ya fue ingresado anteriormente');
             }

            $academic = User::create( $request->all() );
            $academic->rut=$rutFormated;
            $academic->save();
            return view('video');
        } catch (Exception $ex) {
            return redirect()->back()->with('alert', 'Error al ingresar datos!');
        } catch (QueryException $ex) {
            return redirect()->rute('users.index')->with('alert', 'Error al ingresar datos!');
        }

    }

    public function index(){
        return view('welcome');
    }
}
