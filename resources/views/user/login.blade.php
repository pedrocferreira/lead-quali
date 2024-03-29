<!DOCTYPE html>
<html >
    <head>
        <title>Investindo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link  rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    </head>
    <body>

        <div class="background"></div>

        <section id="conteudo-view" class="login">
            <h1>Investindo</h1>
            <h3>O nosso gerenciador de investimento</h3>

            {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}

            <p>Acesse o sistema</p>

            <label>
                {!! Form::text('username', null, ['class' => 'input', 'placeholder' => "Usuário"]) !!}
            </label>

            <label>
                {!! Form::password('password', ['placeholder' => 'Senha']) !!}
            </label>

            {!! Form::submit('Entrar') !!}

            {!! Form::close() !!}
        </section>

    </body>
</html>