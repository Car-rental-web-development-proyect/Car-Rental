<main class="contenedor">
      <h3 class="centrar-texto">Contacto</h3>

      <div class="contacto-bg"></div> <!-- Imagen de fondo-->

      <form action="" class="formulario">
         <div class="campo">
            <label class="campo__label" for="Nombre" >Nombre</label>
            <input class="campo__field" type="text"  placeholder="Nombre Completo" id="nombre">
         </div>

         <div class="campo">
            <label class="campo__label" for="email" >E-mail</label>
            <input class="campo__field" type="text"  placeholder="Correo Electronico" id="email">
         </div>

         <div class="campo">
            <label class="campo__label" for="mensaje" >Mensaje</label>
            <textarea class="campo__field campo__field--textarea" type="text" id="mensaje"></textarea>
         </div>

         <div class="campo">
            <input class = "boton-secundario-block" type="submit" value="Enviar" class="boton">
         </div>
      </form>
</main>