<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- preload -->
    <link rel="preload" href="./build/css/style.css">
    <link rel="stylesheet" href="./build/css/style.css">

    <link rel="stylesheet" href="./build/css/login.css">

    <link rel="preload" href="./build/css/normalize.css">
    <link rel="stylesheet" href="./build/css/normalize.css">

    <link rel="shortcurt icon" href="#">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>BeeCar</title>

</head>
<body>
   
   <header class="header inicio">
      <div class="contenedor bg">
         <div class="barra">
            <a href="/" class="logo">
               <h1 class="logo__nombre">Bee<span class="logo__bold">Car</span></h1>
            </a>

            <nav class="navegacion">
               <a href="#" class="navegacion__enlace">Consulta tu reserva</a>
               <a href="#" class="navegacion__enlace">Condiciones de renta</a>
               <a href="#" class="navegacion__enlace">Ofertas</a>
               <a href="#" class="navegacion__enlace">Agencias</a>
               <a href="./contacto.html" class="navegacion__enlace">Contacto</a>
            </nav>

         </div>
      </div> <!-- .contenedor -->

      <div class="contenedor-slider">
         <div class="slider">
            <div class="list">
               <div class="item">
                  
               </div>
               <div class="item">
                  
               </div>
               <div class="item">
                  
               </div>
               <div class="item">
                  
               </div>
            </div>
            <div class="buttons">
               <button id="prev"><</button>
               <button id="next">></button>
            </div>
            <ul class="dots">
               <li class="active"></li>
               <li></li>
               <li></li>
               <li></li>
            </ul>
         </div>
      </div>
   </header>

    <?php echo $contenido ?>

   <footer class="footer">
      <div class="contenedor bg">
         <div class="barra">
            <a href="./index.html" class="logo">
               <h1 class="logo__nombre">Bee<span class="logo__bold">Car</span></h1>
            </a>

            <nav class="navegacion">
               <a href="#" class="navegacion__enlace">Consulta tu reserva</a>
               <a href="#" class="navegacion__enlace">Condiciones de renta</a>
               <a href="#" class="navegacion__enlace">Ofertas</a>
               <a href="#" class="navegacion__enlace">Agencias</a>
               <a href="./contacto.html" class="navegacion__enlace">Contacto</a>
            </nav>

         </div>
      </div> <!-- .contenedor -->
   </footer>

   <script src="./build/js/index.js"></script>

</body>
</html>