<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>tours</title>

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
    <body class="antialiased">
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
    @auth
        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
    @else
        <div style="text-align: right;">
            <a href="{{ route('login') }}" style="display: inline-block; margin-right: 10px;" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        </div>
    @endauth
</div>

        <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="#" id="logo"><span>CITY</span>tours</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#servicios">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#book">Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#paquete">Paquete</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Galeria">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Conocenos">Conocenos</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Buscar">
              <button class="btn btn-primary" type="button">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
    

      
      <!--home section stard-->

      <div class="home">
        <div class="content">
          <h5>BIENVENIDOS A HUÁNUCO</h5>
          <h1>VISITA <span class="changecontent"></span></h1>
          <p>Ven a peru y disfruta una de las mejores experiencias del turismo<br> peru lo tiene todo y te sorprendera</p>
          <a href="#book">Book Place</a>
        </div>
      </div>

      <!--home section end-->


      <!-- Section Services Start -->
    <section class="servicios" id="servicios">
      <div class="container">
        <div class="main-txt">
          <h1><span>S</span>ervicios</h1>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <i class="fas fa-hotel"></i>
              <div class="card-body">
                <h3>Hotel </h3>
                <p>Mantenemos alianzas estratégicas con los mejores hoteles a nivel nacional para brindarle siempre la mejor alternativa en su hospedaje y estancia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <i class="fas fa-utensils"></i>
              <div class="card-body">
                <h3>Alimentos y bebidas</h3>
                <p>Colaboramos estrechamente con restaurantes de renombre en cada destino, garantizando siempre la mejor experiencia gastronómica durante su viaje.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <i class="fas fa-bullhorn"></i>
              <div class="card-body">
                <h3>Guía de seguridad</h3>
                <p>Trabajamos en conjunto con guías expertos y servicios de seguridad de confianza para asegurar que su viaje esté lleno de aventuras emocionantes y, al mismo tiempo, sea seguro en todo momento.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <i class="fas fa-globe-asia"></i>
              <div class="card-body">
                <h3>Para Todo el mundo</h3>
                <p>Ofrecemos nuestros servicios en todo el mundo, permitiéndole explorar y disfrutar de los destinos más asombrosos y variados alrededor del globo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <i class="fas fa-plane"></i>
              <div class="card-body">
                <h3>Viajes rápidos y seguros</h3>
                <p>Encuentra los mejores precios de boletos de avión y empieza a viajar.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <i class="fas fa-hiking"></i>
              <div class="card-body">
                <h3>Aventuras</h3>
                <p>Embárquese en emocionantes aventuras por tierra, mar y aire, descubriendo destinos fascinantes y viviendo experiencias inolvidables en cada rincón del mundo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section Services End -->


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



      <!-- section paquetes stard -->

      <section class="paquete" id="paquete">
        <div class="container">
          
          <div class="main-text">
            <h1><span>P</span>aquetes</h1>
          </div>

          <div class="row" style="margin-top: 30px;">

            <div class="col-md-4 py-3 py-md-0">

              <div class="card">
                <img src="{{ asset('imagenes/p1.jpg') }}" alt="">
                <div class="card-body">
                  <h3> Iglesia de San Francisco </h3>
                  <p>Segunda Iglesia de Huánuco que anexa al Convento y con el nombre de San Bernardino, santo que designaron como patrono. Tanto el convento como la Iglesia se erigieron por los frailes franciscanos y el aporte pecuniario de algunos encomendados.
 

 Fue fundador de este convento Fray Juan del corso y su patrón Gómez Arias, su primer guardián el padre Coimbra…</p>
                  <div class="stard">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star "></i>
                  </div>
                  <h6>Precio: <strong>$80.00</strong></h6><br>
                  <a href="book.blade.php">Reservar ahora</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 py-3 py-md-0">

              <div class="card">
                <img src="{{ asset('imagenes/p2.jfif') }}" alt="">
                <div class="card-body">
                  <h3> Kotosh </h3>
                  <p>Kotosh es un sitio arqueológico ubicado en el distrito, provincia y departamento de Huánuco, en el Perú. Se compone de una serie de edificios superpuestos con 6 periodos de ocupación continua que datan desde el Arcaico Tardío hasta el Intermedio Temprano. El más famoso de sus recintos, que se encuentra expuesto actualmente al público, es el Templo de las Manos Cruzadas, llamado así por tener dos altorrelieves en barro en forma de sendos brazos cruzados, cuya antigüedad se remonta al 1800 a. C. (fase Kotosh-Mito).</p>
                  <div class="stard">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star "></i>
                  </div>
                  <h6>Precio: <strong>$320.00</strong></h6><br>
                  <a href="#book">Reservar ahora</a>
                </div>
              </div>

            </div>

            <div class="col-md-4 py-3 py-md-0">

              <div class="card">
                <img src="{{ asset('imagenes/p3.jfif') }}" alt="">
                <div class="card-body">
                  <h3> Casa de la Perricholi </h3>
                  <p>Hermosa casa de adobe construida sobre una cuesta empinada. Desde el punto más alto se logra una vista panorámica del pueblo de Tomayquichua. Se construyó en 1739 y en ella vivió Micaela Villegas Hurtado: mujer de encantadora belleza conocida como La Perricholi, quien se convirtió en la amante del virrey Amat y Juniet.

En la actualidad, la casa tiene un pequeño guarda ropa en la habitación principal y muebles de la época, una réplica de la cocina, un carruaje reconstruido, vestidos de moda de la época.</p>
                  <div class="stard">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star "></i>
                  </div>
                  <h6>Precio: <strong>$120.00</strong></h6><br>
                  <a href="#book">Reservar ahora</a>
                </div>
              </div>

            </div>
          </div>


          <div class="row" style="margin-top: 30px;">

            <div class="col-md-4 py-3 py-md-0">

              <div class="card">
                <img src="{{ asset('imagenes/5.jpg') }}" alt="">
                <div class="card-body">
                  <h3> Huánuco Pampa </h3>
                  <p>Conocido también como Huánuco Viejo. Importantísimo centro de más de 2 km² ubicado sobre una meseta o pampa de 200 ha de extensión a 3,700 metros de altura que se emplaza sobre el valle del Vizcarra. Fue establecido allí porque marcaba el punto medio del camino entre el Cuzco y Tomebamba, hoy en el sur de Ecuador. Desde entonces la ciudadela ha sido reconocida como "La Capital del Chinchaysuyo", una de las cuatro regiones en que estaba dividido políticamente el llamado Imperio de los Incas</p>
                  <div class="stard">
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star "></i> 
                  </div>
                  <h6>Precio: <strong>$220.00</strong></h6><br> 
                  <a href="#book">Reservar ahora</a> 
                </div>
              </div>
            </div>

            <div class="col-md-4 py-3 py-md-0"> 
  
              <div class="card"> 
                <img src="{{ asset('imagenes/6.jpg') }}" alt="">
                <div class="card-body"> 
                  <h3> Shillacoto </h3>  
                  <p>Shillacoto es un sitio arqueológico en Perú. Se encuentra ubicado en la Región Huánuco, provincia de Huánuco, Distrito de Huánuco.1​

Entre los años 1967 y 1969 se realizaron excavaciones bajo la dirección de Chiaki Kano. Según las investigaciones se desarrolló cuatro culturas: Shillacoto-Higueras, Shillacoto-Kótosh, Shillacoto-Wairajirka y Shillacoto-Mito. La ocupación más antigua corresponde a Shillacoto-Mito (2000 a. C.), destacando su edificio principal, conocido como el "Templo de Shillacoto", el cual es similar al "Templo de las Manos Cruzadas" de Kotosh.</p> 
                  <div class="stard">  
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star "></i> 
                    <i class="fa-solid fa-star "></i> 
                  </div> 
                  <h6>Precio: <strong>$320.00</strong></h6><br> 
                  <a href="#book">Reservar ahora</a> 
                </div>  
              </div>  
 
            </div> 
 
            <div class="col-md-4 py-3 py-md-0"> 
 
              <div class="card"> 
                <img src="{{ asset('imagenes/7.jpg') }}" alt=""> 
                <div class="card-body"> 
                  <h3> Puente Calicanto </h3> 
                  <p>El Puente Calicanto está ubicado en la ciudad de Huánuco y cruza el río Huallaga.​ Su construcción comenzó en 1879 y culminó el 1884. Fue diseñado por Santos Benedetti, Silverio Lázzaro y Vitorio Albertini.​ Tiene una longitud de 60 m y dos columnas. Fue construido sobre la base de piedra de canto rodado junto con mezcla de cal, arena y claras de huevos.</p> 
                  <div class="stard"> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i> 
                    <i class="fa-solid fa-star checked"></i>  
                    <i class="fa-solid fa-star "></i> 
                  </div>  
                  <h6>Precio: <strong>$50.00</strong></h6><br> 
                  <a href="#book">Reservar ahora</a> 
                </div> 
              </div>  
 
            </div> 
 
 
           
          </div> 
        </div> 
      </section> 
   
 
      <!-- section paquetes end --> 


    <!-- Section Galeria Start -->
    <section class="Galeria" id="Galeria">
      <div class="container">
        <div class="main-txt">
          <h1><span>G</span>aleria</h1>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/1.jpg') }}" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/2.jpg') }}" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/3.jpg') }}" alt="" height="230px">
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/4.jpg') }}" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/5.jfif') }}" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/6.jfif') }}" alt="" height="230px">
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section Galeria End -->


    <!-- Conocenos Start -->
    <section class="Conocenos" id="Conocenos">
      <div class="container">
        <div class="main-txt">
          <h1>Quienes <span>Somos</span></h1>
        </div>
        <div class="row" style="margin-top: 50px;">
          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="{{ asset('imagenes/somos.jpg') }}" alt="">
            </div>
          </div>
          <div class="col-md-6 py-3 py-md-0">
            <h2>Cómo funcionan las agencias de viajes</h2>
            <p>Somos una empresa dedicada al turismo en todas sus diversidades, tenemos más de 10 años de experiencia, los cuales nos permiten conocer al detalle el inventario turístico de todo el departamento de Huánuco, ofreciendo distintas alternativas de turismo y aventura al visitante local, regional, nacional e internacional.

Nuestra prioridad es la calidad del servicio al cliente, buscamos que su vivencia turística se convierta en una experiencia inolvidable repetible, haciendo prevalecer nuestros principales atributos como la seguridad, comodidad y cumplimiento de los distintos servicios incluidos en cada uno de nuestros productos comerciales otorgados para lograr nuestra finalidad que es la satisfacción del cliente.
Durante estos años de experiencia nos hemos posicionado en el mercado y hemos creado una marca especializada como es . El desarrollo de la empresa ha permitido alcanzar liderazgo permitiendo otorgar el mejor de los servicios a un precio al alcance de todos.</p>
            <button id="Conocenos-btn">Leer más...</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Conocenos End -->

    <!-- Footer Start -->
    <footer id="footer">
      <h1><span>C</span>ity Tours</h1>
      <p>Descubre el mundo con nosotros, donde cada viaje es una historia por contar.</p>
      <div class="social-links">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
      </div>
      <div class="credit">
        <p>Diseñado por <a href="#">Eduardo</a></p>
      </div>
      <div class="copyright">
        <p>&copy;Tu puerta de entrada al mundo de las experiencias inolvidables.</p>
      </div>
    </footer>
    <!-- Footer End -->
    </body>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</html>
