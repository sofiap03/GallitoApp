@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Publicación existente </h1>

        @include('layouts.subview-form-errors')

        {!! Form::model($post, ['method' => 'put', 'route' => ['posts.update', $post->id]]) !!}

        @include('posts.subview-post-fields')

        <button type="submit" class="btn btn-primary">Editar</button>

        {!! Form::close() !!}
    </div>

    <div>
        <footer class="page-footer font-small blue pt-4">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background-color:white; margin: 20px ">Desarrollado en Programación Backend por Sofia Piñuela Mejia ©️ 2022

      <!-- Copyright -->

        </footer>
    </div>
@endsection
