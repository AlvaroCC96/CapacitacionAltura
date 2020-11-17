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
                    
                <iframe src="https://www.youtube.com/embed/hq0mvwnmYu4?controls=0&showinfo=0" 
                    frameborder="0" allowfullscreen width="570" height="315" >
                </iframe>

                <form action="{{action('UserController@videoData')}}" method="POST">
                        <div class= "form-group">
                            @csrf
                            <input type="hidden" name="intid" id="intid" value ="{{$user->id}}" class="form-control" required><br>
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