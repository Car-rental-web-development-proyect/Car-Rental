
<main class="contenedor">
    <h1 class="centrar-texto">Login</h1>
      
    
      <input type="submit" value="Volver" class="boton-secundario-block boton-margin">
      <form class="contenedor" id="formulario" class="formulario" method="POST" action="login.html">

    
      <fieldset>
        <legend>Inicia sesión</legend>
        <!--Usuario-->
        <div class="contenedor">
           <label  for="usuario">Usuario</label>
            <input class="flex" type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario" value="">
        </div>
       
        <!--Correo-->
        <div class="contenedor">
          <label for="correo">Correo</label>
          <input class="flex" type="email" id="correo" name="correo" placeholder="example@example.com" value="">
        </div>
        
        <div class="contenedor">
          <label for="password">Contraseña</label>
          <input class="flex" type="password" id="password" name="password" value="">
        </div>
        <!--Password-->

        <div class="contenedor flex-gap">
          
          <button type="submit" class="boton-primario-block flex-gap">Iniciar sesion</button>
          <button type="submit" class="boton-secundario-block flex-gap">Registrarse</button>
          
        </div>
        
      </fieldset>

      
    </form>
    <script src="./build/js/login.js"></script>
</main>