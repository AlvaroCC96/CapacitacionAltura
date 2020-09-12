@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 justify-content-center">
        <div class="card border-secondary shadow">
            <div class="card-header h2 bg-tertiary">
                <div class="row">
                    <div class="col">
                        RESULTADOS EVALUACIÓN DIAGNOSTICO
                    </div>
                </div>
            </div>
            <div class="card-body text-center">
                    <h4>Puntaje obtenido: {{$contador}}</h4>
                    <h4>Puntaje total: 10</h4>
            </div>
        </div>
    </div>
</div>
@endsection