@extends('layouts.banner')
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
                        RESULTADOS EVALUACIÓN DIAGNOSTICO
                    </div>
                </div>
            </div>
            <div class="card-body text-center">
                <form action="{{action('EvaluationController@dbexcel')}}" method="POST">
                    <div class="form-group">
                        @csrf
                        <label for="rut" name="rut"> Ingrese su RUT (Formato 12346789-K): </label>
                        <input type="text" name="rut" id="rut" class="form-control" required><br>

                        <label for="clave" name="clave"> Ingrese clave: </label>
                        <input type="clave" name="clave" id="clave" class="form-control" required>
                    </div>
                    <div class="form-group mt-4 text-center">
                        <button type="submit" class="btn btn-primary">Descargar Resumen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
