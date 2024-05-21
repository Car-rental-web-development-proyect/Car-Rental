<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- preload -->
    <link rel="preload" href="./css/style.css">
    <link rel="stylesheet" href="./css/style.css">

    <link rel="preload" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/normalize.css">

    <link rel="shortcurt icon" href="#">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>BeeCar</title>

</head>
<body>
   
   <header class="header slider">
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

      <div class="header__texto">
         <h2>BeeCar - Tu Aliado en movilidad</h2>
         <p>Rentar un auto es la forma más segura de viajar.
            ¡Es tu propio espacio!</p>
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

</body>
</html>