<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>dd</title>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


        <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--boostrap-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!--google fonts-->



        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body >
      <!-- section book stard -->
      <section class="book" id="book">
        <div class="container">

          <div class="main-text">
            <h1><span>B</span>ook</h1>
          </div>
          <div class="row">
            <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/llamafeliz.jpg') }}" alt="">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0">
            <form action="#">
              <input type="text" class="form-control" placeholder="Destino" required><br>
              <input type="text" class="form-control" placeholder="N° de personas" required><br>
              <input type="date" class="form-control" placeholder="Arrivals" required><br>
              <input type="date" class="form-control" placeholder="Leaving" required><br>
              <textarea class="form-control" rows="5" name="text" placeholder="ingresa tu nombre y detalles"></textarea><br>
              <input type="submit" value="Reservar ahora" class="submit" required>

            </form>
          </div>
        </div>
        </div>
      </section>
      <!-- section book end -->




      



    
    </body>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</html>
