@extends('layouts.banner')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 justify-content-center">
        <div class="card border-secondary shadow">
            <div class="card-header h2 bg-tertiary">
                <div class="row">
                    <div class="col">
                        CAPACITACIÓN TRABAJOS EN ALTURA FÍSICA
                    </div>
                </div>
            </div>
            <div class="card-body text-center">
                    
                <iframe src="https://www.youtube.com/embed/HIsKF943vTk?controls=0&showinfo=0" 
                    frameborder="0" allowfullscreen width="570" height="315" >
                </iframe>

                <div class="mt-4 text-center">
                    <a href="/cuestionario" class="btn btn-primary">Continuar</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection