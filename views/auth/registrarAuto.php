<main class="contenedor" >
    <h1 class="centrar-texto">Registrar Automóvil</h1>
      
    
      <input type="submit" value="Volver" class="boton-secundario-block boton-margin">
      <form class="contenedor" id="formulario" method="POST" action="login.html">

    
        <fieldset>
          <legend>Automóvil</legend>
          <!--Marca-->
          <div class="contenedor">
             <label for="marca">Marca</label>
            <input class="flex"  type="text" id="marca" name="marca" placeholder="Ingrese la marca de su auto" value="">
          </div>
         
          <!--Linea-->
          <div class="contenedor">
            <label for="linea">Linea</label>
            <input class="flex"  type="text"id="linea" name="linea" placeholder="Ingrese la linea de su auto" value="">
          </div>
          
          <!--Modelo-->
          <div class="contenedor">
            <label for="modelo">Modelo</label>
            <input class="flex"  type="text" id="modelo" name="modelo" placeholder="Ingrese el modelo del carro" value="">
          </div>
          
          
          <!--Usuario-->
          <div class="contenedor">
            <label for="placa">Placa</label>
            <input class="flex"  type="text" id="placa" name="placa" placeholder="Ingrese la placa del carro" value="">
          </div>
          
          
          <!--Correo-->
          <div class="contenedor">
            <label for="capacidad">Capacidad</label>
            <input class="flex"  type="number" id="capacidad" name="capacidad" placeholder="Ingrese la placa del carro" min="1" max="20" value="">
          </div>
          

          <!--Descripcion-->
          <div class="contenedor">
            <label for="descripcion">Descripcion</label>
            <textarea class="flex"  id="descripcion"></textarea>            
          </div>


          <!--Disponibilidad-->
          <div class="contenedor">
            <label>Disponibilidad:</label>
            <select class="flex"  id="opciones">
              <option value="">-- Seleccione --</option>
              <option value="Compra">Disponible</option>
              <option value="Vende">No disponible</option>
            </select>
          </div>
          <div class="contenedor ">
            <button type="submit" class="boton-primario-block"> Registrar</button>
          </div>
        </fieldset>
        
     </form>


  </main>

  <script src="./build/js/registrarcarro.js"></script>