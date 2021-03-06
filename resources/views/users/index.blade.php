@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Usuarios Registrados en Gallito-App</h1>

        @forelse ($users as $user)
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">{{$user->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$user->created_at->diffForHumans()}}</h6>
                <p class="card-text">{{$user->email}}</p>
            </div>
        </div>
        @empty
        <div class="alert alert-info" role="alert">
            No hay usuarios registrados en GallitoApp
        </div>
    @endforelse
    <div class="mt-3"> {{ $users->links() }} </div>

</div>

    </div>

    <div>
        <footer class="page-footer font-small blue pt-4">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background-color:white; margin: 20px ">Desarrollado en Programación Backend por Sofia Piñuela Mejia ©️ 2022

      <!-- Copyright -->

        </footer>
    </div>

@endsection
