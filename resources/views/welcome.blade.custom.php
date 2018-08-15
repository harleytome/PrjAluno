@extends('layouts.paginainicial')

@section('content')

<div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="masthead-content text-white py-5 py-md-0">
                    <h1 class="mb-3">Seja Bem Vindo</h1>
                    <p class="mb-5">Estamos trabalhando cada vez mais para facilitarmos sua vida.</p>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        {{csrf_field()}}
                        <div class="input-group input-group-newsletter">
                            <div>
                                Seu email
                                <p>
                                    <input type="email" class="form-control" placeholder="Digite seu email..." id="email" name="email">
                                </p>
                                @if($errors->has('email'))
                                <span class="error-message">
                                    {{$errors->first('email')}}<br>
                                </span>
                                @endif
                                Sua Senha
                                <p>
                                    <input type="password" class="form-control" placeholder="Sua senha..." id="password" name="password">
                                </p>
                                @if($errors->has('password'))
                                <span class="error-message">
                                    {{$errors->first('password')}}<br>
                                </span>
                                @endif
                                <button type="submit" class="btn btn-btnlogin">Entrar</button>
                            </div>
                        </div>
                        <div class="input-group">
                            <a href="#">Esqueceu sua senha?</a>
                            <span class="tab">
                                <a href="{{route('register')}}">Faça su registro</a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js'></script>

<!-- Custom scripts for this template -->
<script src="js/inicio.min.js"></script>

@endsection
