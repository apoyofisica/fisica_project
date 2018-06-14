
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carrera de Fisica</title>

    <link href="{{ asset('login/res/bootstrap3/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('login/font-awesome/css/font-awesome.min.css') }}">
    <style>
        .centered{
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center centered">
                <h3>IDENTIFICATE</h3>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ingresar</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/auth/login', 'class' => 'form']) !!}
                        {!! csrf_field() !!}
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Usuario o email" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                            </div>
                            <input class="btn btn-default btn-block" type="submit" value="Iniciar Sesion">
                        </fieldset>
                        <a class="btn btn-link hidden" href="{{ url('password/email') }}">Forgot Your Password?</a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="{{ asset('login/res/jquery.min.js') }}"></script>
<script src="{{ asset('login/res/bootstrap3/js/bootstrap.min.js') }}"></script>


</body>
</html>
