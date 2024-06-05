
<main class="contenedor">
    <h1 class="centrar-texto">Login</h1>
      <?php foreach($errores as $error): ?>
         <div class="alerta error">
               <?php echo $error; ?>
         </div>
      <?php endforeach; ?>
      
      <input type="submit" value="Volver" class="boton-secundario-block boton-margin">
      <form class="contenedor" id="formulario" class="formulario" method="POST" action="">

    
      <fieldset>
        <legend>Inicia sesión</legend>       
        <!--Correo-->
        <div class="contenedor">
          <label for="correo">Correo</label>
          <input class="flex" type="email" id="correo" name="usuario[usu_correo]" placeholder="example@example.com" value="">
        </div>
        
        <div class="contenedor">
          <label for="password">Contraseña</label>
          <input class="flex" type="password" id="password" name="usuario[usu_password]" value="">
        </div>
        <!--Password-->

        <div class="contenedor flex-gap">
          
          <button type="submit" class="boton-primario-block flex-gap">Iniciar sesion</button>
          <a href="/registrarse" class="boton-secundario-block flex-gap">Registrarse</a>
          
        </div>
        
      </fieldset>

      
    </form>
    <script src="./build/js/login.js"></script>
</main>