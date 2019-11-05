@extends('layouts.admin-lte.auth.app')

@section('content')
<div class="card">
    <div class="card-body login-card-body">
        <a href="{{ asset('./') }}" title="Voltar"><i class="fas fa-chevron-circle-left"></i></a>
        <p class="login-box-msg">CADASTRAR NO SISTEMA</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group mb-3">
                    <div class="col-md-12">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Seu Nome" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="col-md-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Seu Email" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="col-md-12">
                    <input id="password" placeholder="Sua Senha" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="col-md-12">
                    <input id="password-confirm" placeholder="Confirmar Senha"  type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Registrar') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
