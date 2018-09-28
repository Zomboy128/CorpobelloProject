@extends('layouts.app')

@section('content')
<div class="agileits">
        <h1>Bienvenido a Corpobello</h1>
        <div class="w3-agileits-info">
            <form class='form animate-form' id='form1' action="{{ route('login') }}" method="post">
                @csrf
                <p class="w3agileits">Inicia Sesión</p>
                <div class='form-group has-feedback wthree'>
                    <label class='control-label sr-only' for='email'>Email</label> 
                    <input class='form-control {{ $errors->has('email') ? ' is-invalid' : '' }}' id='email' name='email' placeholder='Email' type='text' value="{{ old('email') }}"><span class='glyphicon glyphicon-ok form-control-feedback'></span>

                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class='form-group has-feedback agile'>
                    <label class='control-label sr-only' for='password'>Contraseña</label> 
                    <input class='form-control{{ $errors->has('password') ? ' is-invalid' : '' }} w3l' id='password' name='password' placeholder='Contraseña' type='password'><span class='glyphicon glyphicon-ok form-control-feedback'></span>

                     @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                     @endif
                </div>
                <div class='submit w3-agile'>
                    <input class='btn btn-lg' type='submit' value='Iniciar Sesión'>
                </div>
            </form>
        </div>  
    </div>  
    <!-- //agileits -->
@endsection
