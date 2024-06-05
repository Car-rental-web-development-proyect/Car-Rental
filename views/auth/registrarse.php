<main class="contenedor" >
    <h1 class="centrar-texto">Registrarse</h1>
      
    
      <input type="submit" value="Volver" class="boton-secundario-block boton-margin">
      <form class="contenedor" id="formulario" method="POST">

    
      <fieldset>
        <legend>Registro</legend>
        <!--nombre-->
        <div class="contendor">
          <label for="nombre">Nombre</label>
          <input class="flex" 
          type="text" 
          id="nombre" 
          name="usuario[usu_nombre]" 
          placeholder="Ingrese su Nombre" 
          value="">
        </div>
        
        <!--apellido-->
        <div class="contendor">
          <label for="apellidoPaterno">Apellido Paterno</label>
          <input class="flex" type="text" id="apellidoPaterno" name="usuario[usu_apepaterno]" placeholder="Ingrese su apellido paterno" value="">        
        </div>

                <!--apellido-->
        <div class="contendor">
          <label for="apellidoMaterno">Apellido Materno</label>
          <input class="flex" type="text" id="apellidoMaterno" name="usuario[usu_apematerno]" placeholder="Ingrese su apellido materno" value="">        
        </div>
        
        <!--Correo-->
        <div class="contendor">
           <label for="correo">Correo</label>
            <input class="flex" type="email" id="correo" name="usuario[usu_correo]" placeholder="example@example.com" value="">
        </div>
       
        <!--Password-->
        <div class="contendor">
          <label for="password">Contraseña</label>
          <input class="flex" type="password" id="password" name="usuario[usu_password]" value="">          
        </div>

        <div class="contenedor">
          <button type="submit" class="boton-primario-block">Registrarse</button>
        </div>
        
      </fieldset>
    </form>
  </main>
  <script src="./build/js/registrarse.js"></script>