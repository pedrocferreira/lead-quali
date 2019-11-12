<html lang="pt-br">

    <head>
    <title> Lead`s</title>
        @yield('css-view')
        <link rel="stylesheet"  href="{{ asset('css/stylesheet.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        
    </head>

    <body>
        @include('templates.menu-lateral')
<<<<<<< HEAD
        <section>
            
            @yield('conteudo-view')
                
        </section>
=======

        <section id="view-conteudo">
            @yield('conteudo-view')
        </section>

>>>>>>> 5e3b39c4cb5677c2f138e72da5fb89aa329c10a3
        @yield('js-view')   
   


</html>