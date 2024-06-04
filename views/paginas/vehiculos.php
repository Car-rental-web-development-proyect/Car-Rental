<main>
   <section>

   </section>

   <section class="contenedor-flota vistaVehiculos">
      <section class="section">
         <form action="" class="formulario-Reservas form_vehiculos contenedor">
            
            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="estado"">Estado</label>
               <select class="formulario__combobox" id="selecionar_estado">
                  <option value="" disabled selected>Estado</option>
                  <option value="Estado1">Estado 1</option>
                  <option value="Estado2">Estado 2</option>
                  <option value="Estado3">Estado 3</option>
               </select>
            </div>


            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="ciudad"">Ciudad</label>
               <select class="formulario__combobox" id="selecionar_ciudad">
                  <option value="" disabled selected>Ciudad</option>
                  <option value="Ciudad1">Ciudad 1</option>
                  <option value="Ciudad2">Ciudad 2</option>
                  <option value="Ciudad3">Ciudad 3</option>
               </select>
            </div>

            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="recoleccion"">Recoleccion</label>
               <input class="formulario-Reservas_input" type="date" id="recoleccion">
            </div>

            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="horario"">Horario</label>
               <input class="formulario-Reservas_input" type="time" id="horario">
            </div>

            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="devolucion"">Devolucion</label>
               <input class="formulario-Reservas_input" type="date" id="devolucion">
            </div>

            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="horario"">Horario</label>
               <input class="formulario-Reservas_input" type="time" id="horario">
            </div>

            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="pasajeros"">Pasajeros</label>
               <input class="formulario-Reservas_input" type="number" id="pasajeros" min="1">
            </div>

            <div class="formulario-Reservas_campo">
               <input class="formulario-Reservas_submit" type="submit" value="Buscar">
            </div>
         </form>
   </section>


   <h3>¡Conoce todos nuestros vehiculos disponibles!</h3>

   <div class="contenedor cards-autos">
      <?php foreach($vehiculos as $vehiculo) : ?>
         <div class="card-auto">
               <img src="./build/src/img/coches/<?php echo $vehiculo->veh_img; ?>" alt="img del auto">

               <div class="card-info">
                  <h4> <?php echo $vehiculo->veh_modelo; ?> </h4>
                  <p> <?php echo $vehiculo->veh_descripcion; ?></p>
                  <p>Vehiculos disponibles: <?php echo $vehiculo->veh_disponibles; ?> </p>
                  <ul class="caracteristicas">
                     <li>
                           <img src="./build/src/img/asiento_icono.svg" alt="">
                           <p> <?php echo $vehiculo->veh_pasajeros; ?> Pasajeros</p>
                     </li>
                     <li>
                           <img src="./build/src/img/maleta_icono.svg" alt="">
                           <p><?php echo $vehiculo->veh_maletas; ?> Maletas</p>
                     </li>
                     <li>
                           <img src="./build/src/img/transmision_icono.svg" alt="">
                           <p><?php echo $vehiculo->veh_manejo; ?></p>
                     </li>
                     <li>
                           <img src="./build/src/img/motor_icono.svg" alt="">
                           <p> <?php echo $vehiculo->veh_cilindro?></p>
                     </li>
                     <li>
                           <img src="./build/src/img/combustible_icono.svg" alt="">
                           <p> <?php echo $vehiculo->veh_combustible; ?> </p>
                     </li>
                     <li>
                           <img src="./build/src/img/precio_icono.svg" alt="">
                           <p> <?php echo $vehiculo->veh_costodia ?> </p>
                     </li>
                  </ul>
                  <button class="boton-secundario-block">Reservar</button>
               </div> 
            </div><!-- .card-auto -->
      <?php endforeach; ?> 
      </div>
   </section>
</main>