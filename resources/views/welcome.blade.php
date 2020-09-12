@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 justify-content-center">
            @if (session('alert'))
            <div class="alert alert-danger">
                {{ session('alert') }}
            </div>
            @endif
            <div class="card border-secondary shadow">
                <div class="card-header h2 bg-tertiary">
                    <div class="row">
                        <div class="col">
                            CAPACITACIÓN TRABAJOS EN ALTURA FÍSICA
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{action('UserController@startSession')}}" method="POST">
                        <div class= "form-group">
                            @csrf
                            <label for="rut" name="rut"> Ingrese su RUT (Formato 12346789-K): </label>
                            <input type="text" name="rut" id="rut" class="form-control" required><br>

                            <label for="nombre" name="nombre"> Ingrese su nombre completo: </label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required><br>

                            <label for="sap" name="sap"> Ingrese SAP: </label>
                            <input type="number" min="0" name="sap" id="sap" class="form-control" required>
                        </div>
                        <div class="form-group mt-4 text-center">
                            <button type="submit" class="btn btn-primary">Continuar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
