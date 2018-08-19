<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css'/>
    <link href="{{ asset('css/theme/theme.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/3.0.0/css/ionicons.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>
    <style>
        .alinhamento-menu {
            padding-left: 10px;
        }

        .alinhamento-menu {
            vertical-align: middle;
        }

        .picture-background {
            background-color: #c9d8e7;
            border-color: rgb(101, 112, 126);
        }

        .borda {
            border-color:tomato;
            border-style:solid;
            border-width: 2px;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{route('main')}}">Logo</a>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('myinfo') }}">Meus Dados</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Desconectar</a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-2 navbar-dark bg-primary">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item alinhamento-menu">
                    <a class="nav-link" href="#"><ion-icon class="align-middle" size="large" name="school"></ion-icon>&nbspMinhas Aulas</a>
                </li>
            </ul>
        </div>
        <br>
        <div class="col-10">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>
