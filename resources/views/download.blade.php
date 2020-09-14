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
                <li class="btn btn-default">
                    <a class='btn btn-info' href='/exportar'>Exportar Accesos</a>
                </li>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
