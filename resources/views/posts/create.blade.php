@extends('layouts.app')

@section('content')
    
    <h1>Crear nueva publicación</h1>

    {!! Form::open(['route' => 'posts.store', 'method' => 'post']) !!}
    
    <form>
        <div class="mb-3">
            <label for="content" class="form-label">Contenido</label>
            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    {!! Form::close() !!}
</div>


@endsection

