<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Regitro  - Sadam</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style_registro.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/logo01.png')}}" class="img-fluid" alt="logo" id="logo_sadam">
                </a>
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin">
            <div class="card-body">
              <h5 class="card-title text-center">{{ __('Registre-se') }}</h5>
              <form class="form-signin" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-label-group">
                  <input type="nome" id="inputNome" class="form-control @error('nome') is-invalid @enderror auto-" name="nome" placeholder="Nome" required autocomplete="nome" autofocus>
                  <label for="inputNome">Nome</label>
                  @error('nome')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror    
                </div>
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="E-Mail" required>
                  <label for="inputEmail">E-Mail</label>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="new-password">
                  <label for="inputPassword">Senha</label>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-label-group">
                  <input type="password" id="input-confirm" class="form-control  @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirme a senha" required>
                  <label for="input-confirm">Confirme sua Senha</label>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-registrar btn-lg btn-block">{{ __('Registrar-se') }}</button> 
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>








