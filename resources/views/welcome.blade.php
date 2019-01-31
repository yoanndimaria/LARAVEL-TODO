@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.breadcrumb')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <div class="links">
                <a href={{ url('/tasks') }}>Créer une tâche</a>
            </div>
            @else
            <div class="buttons">
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="button is-primary">
                    <strong>Sign up</strong>
                </a>
                @endif
                <a href="{{ route('login') }}" class="button is-light">
                    Log in
                </a>
            </div>
            @endauth
        </div>
        @endif
    </div>
</div>
@endsection
