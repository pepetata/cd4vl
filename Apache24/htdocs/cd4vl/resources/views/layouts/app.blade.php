<!doctype html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Sistema para criação de locais e de dígito de verificação para o VoiceLink">
      <meta name="author" content="Flavio Ferreira">

      <title>Sistema do Flavio @yield('title')</title>

      <!-- Fonts -->
      <link href="css/app.css" rel="stylesheet" type="text/css">


   </head>
   <body>
      <header class="header text-center">
         @section('headernav')
         @show
      </header>

      <section id='mainsession'>
         @section('main')
         @show
      </section>

      <footer>
         <br>
         <hr>
         <p class='text-center'>Copyright 2018 Flávio Luiz Ferreira</p>
      </footer>

   </body>
   @section('endofhtml')
   <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
   crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <script type="text/javascript" src="js/dv.js"></script>
   @show
</html>
