@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.breadcrumb')
    <div class="box columns">
        <div class="column">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="field">
                    <label class="label">Nom et prénom</label>
                    <p class="control has-icons-left has-icons-right">
                        <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text" name="name" placeholder="Nom et prénom" value="{{ old('name') }}" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </p>
                </div>
                <div class="field">
                    <label class="label">Email</label>
                    <p class="control has-icons-left has-icons-right">
                        <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" name="email" placeholder="Adresse email" value="{{ old('email') }}" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </p>
                </div>
                <div class="field">
                    <label class="label">Mot de passe</label>
                    <p class="control has-icons-left has-icons-right">
                        <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" placeholder="Mot de passe" value="{{ old('password') }}" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </p>
                </div>
                <div class="field">
                    <label class="label">Mot de passe</label>
                    <p class="control has-icons-left has-icons-right">
                        <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password_confirmation" placeholder="Mot de passe" value="{{ old('password') }}" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </p>
                </div>
                <div class="field">
                    <p class="control">
                        <button class="button is-success">
                            Login
                        </button>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
