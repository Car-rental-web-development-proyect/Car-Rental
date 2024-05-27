<main class="contenedor" >
    <h1 class="centrar-texto">Registrarse</h1>
      
    
      <input type="submit" value="Volver" class="boton-secundario-block boton-margin">
      <form class="contenedor" id="formulario" method="POST" action="login.html">

    
      <fieldset>
        <legend>Registro</legend>
        <!--nombre-->
        <div class="contendor">
          <label for="nombre">Nombre</label>
          <input class="flex" type="text" id="nombre" name="nombre" placeholder="Ingrese su Nombre" value="">
        </div>
        
        <!--apellido-->
        <div class="contendor">
          <label for="apellido">Apellido</label>
          <input class="flex" type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" value="">        
        </div>
        <!--Usuario-->
        <div class="contendor">
          <label for="usuario">Usuario</label>
          <input class="flex" type="text" id="usuario" name="usuario" placeholder="Ingrese su Usuario" value="">
        </div>
        
        <!--Correo-->
        <div class="contendor">
           <label for="correo">Correo</label>
            <input class="flex" type="email" id="correo" name="correo" placeholder="example@example.com" value="">
        </div>
       
        <!--Password-->
        <div class="contendor">
          <label for="password">Contraseña</label>
          <input class="flex" type="password" id="password" name="password" value="">          
        </div>

        <div class="contenedor">
          <button type="submit" class="boton-primario-block">Registrarse</button>
        </div>
        
      </fieldset>
    </form>
  </main>
  <script src="./build/js/registrarse.js"></script>