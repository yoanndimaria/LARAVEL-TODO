@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.breadcrumb')
    <div class="box columns">
        <div class="column">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="text" name="email" placeholder="Ton pseudo" value="{{ old('email') }}" required autofocus>
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
                    <p class="control has-icons-left">
                        <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="password" type="password" placeholder="Password" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                    <div class="field">
                        <p class="control">
                            <button class="button is-success">
                                Login
                            </button>
                        </p>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </form>
        </div>
        <div class="column">
            Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis. quam Constantina exultans ut in tuto iam locata mariti salute muneratam vehiculoque inpositam per regiae ianuas emisit in publicum, ut his inlecebris alios quoque ad indicanda proliceret paria vel maiora.
        </div>
    </div>
</div>
@endsection
