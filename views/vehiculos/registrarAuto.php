<main class="contenedor" >
    <h1 class="centrar-texto">Registrar Automóvil</h1>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
      
    
    <a href="/admin" class="boton-secundario-block boton-margin">Volver</a>
    <form class="contenedor" id="formulario" method="POST" action="/registrarAuto" >

      <?php include_once __DIR__ . '/formularioAuto.php'; ?>
      
    </form>

  </main>

  <script src="./build/js/registrarcarro.js"></script>