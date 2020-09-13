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
            
            $request->rut =$rutFormated;
            $validator = Validator::make($request->all(), $rules);
            
            if ($validator->fails()) {
                // handler errors
                $erros = $validator->errors();
                return redirect()->back()->with('alert', 'Error al ingresar datos, RUT o SAP ya fue ingresado anteriormente');
             }

            $user = User::create( $request->all() );
            $user->rut=$rutFormated;
            $user->save();
            return view('video',compact('user'));           
        } catch (Exception $ex) {
            return redirect()->back()->with('alert', 'Error al ingresar datos!');
        } catch (QueryException $ex) {
            return redirect()->rute('users.index')->with('alert', 'Error al ingresar datos!');
        }

    }

    public function videoData(Request $request) {
        $id =$request->intid;

        return view('questions', compact('id'));
    }

    public function index(){
        return view('welcome');
    }
}
