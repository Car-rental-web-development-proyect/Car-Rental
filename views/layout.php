<?php
   if(!isset($inicio)) {
      $inicio = False;
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- preload -->
    <link rel="preload" href="./build/css/style.css">
    <link rel="stylesheet" href="./build/css/style.css">

    <link rel="preload" href="./build/css/normalize.css">
    <link rel="stylesheet" href="./build/css/normalize.css">

    <link rel="stylesheet" href="./build/css/login.css">
    <link rel="stylesheet" href="./build/css/auth.css">

    <link rel="shortcurt icon" href="#">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>BeeCar</title>

</head>
<body>
   
   <header class="header">
      <div class="contenedor bg nav">
         <div class="barra">
            <a href="/" class="logo">
               <h1 class="logo__nombre">Bee<span class="logo__bold">Car</span></h1>
            </a>

            <nav class="navegacion">
               <a href="/reservas" class="navegacion__enlace">Realiza tu reserva</a>
               <a href="/condiciones" class="navegacion__enlace">Condiciones de renta</a>
               <a href="/ofertas" class="navegacion__enlace">Ofertas</a>
               <a href="/agencias" class="navegacion__enlace">Agencias</a>
               <a href="/contacto" class="navegacion__enlace">Contacto</a>
            </nav>
         </div>
      </div> <!-- .contenedor -->

      <div class="contenedor-slider <?php echo ($inicio ? 'inicio' : '') ?>">
         <div class="slider">
            <div class="list">
               <div class="item">
                  <div class="info">
                     <h2>Increíbles coches para tu beneficio</h2>
                     <p>Descubre un nuevo modelo de auto con características avanzadas y diseño elegante para tus viajes. Aprovecha nuestra oferta especial de lanzamiento</p>
                     <button class="boton-secundario-block boton-margin">¡Ver Mas!</button>
                  </div>
               </div>
               <div class="item">
                  <div class="shadowbox">
                     <div class="info">
                        <h2>Ofertas Especiales de Temporada</h2>
                        <p>Aprovecha descuentos exclusivos en modelos seleccionados. Financiamiento a tasa 0% disponible por tiempo limitado</p>
                        <button class="boton-secundario-block boton-margin">Ver Ofertas</button>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="shadowbox">
                     <div class="info">
                        <h2>Conoce los Nuevos Modelos 2024</h2>
                        <p>Presentamos nuestra nueva línea de vehículos 2024, con tecnología de punta y diseño innovador. Ven y descubre cuál es el ideal para ti</p>
                        <button class="boton-secundario-block boton-margin">Ver Modelos</button>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="shadowbox">
                     <div class="info">
                        <h2>Historias de Satisfacción</h2>
                        <p>Lee lo que nuestros clientes tienen que decir sobre su experiencia de compra con nosotros. La satisfacción del cliente es nuestra prioridad</p>
                        <button class="boton-secundario-block boton-margin">¡Ver Mas!</button>
                     </div>
                  </div>
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
            <a href="/" class="logo">
               <h1 class="logo__nombre">Bee<span class="logo__bold">Car</span></h1>
            </a>

            <nav class="navegacion">
               <a href="/reservas" class="navegacion__enlace">Realiza tu reserva</a>
               <a href="/condiciones" class="navegacion__enlace">Condiciones de renta</a>
               <a href="/ofertas" class="navegacion__enlace">Ofertas</a>
               <a href="#" class="navegacion__enlace">Agencias</a>
               <a href="/contacto" class="navegacion__enlace">Contacto</a>
            </nav>

         </div>
      </div> <!-- .contenedor -->
   </footer>

   <script src="./build/js/index.js"></script>

</body>
</html>