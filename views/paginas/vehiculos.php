<main>

<form action="/tarjeta" method="POST">
   <section class="contenedor-flota vistaVehiculos">
      <section class="section">
         <div class="formulario-Reservas form_vehiculos contenedor">
            
            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="estado"">Estado</label>
               <select name="agenciaRecoger[estado]" class="formulario__combobox combobox-estado" id="selecionar_estado">
                  <option value="" disabled selected>Estado</option>
                  <?php foreach($estados as $estado):?>
                     <?php if($seleccionado == $estado): ?>
                        <option selected value="<?php echo $estado?>"><?php echo $estado?></option>
                     <?php endif; ?>
                        <option value="<?php echo $estado?>"><?php echo $estado?></option>
                  <?php endforeach; ?>
               </select>
            </div>


            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="ciudad"">Ciudad</label>
               <select name="agenciaRecoger[ciudad]" class="formulario__combobox" id="selecionar_ciudad">
                  <option value="" disabled selected>Ciudad</option>
                  <?php foreach($agencias as $agencia):?>
                     <option value="<?php echo $agencia->age_ciudad?>"><?php echo $agencia->age_ciudad?></option>
                  <?php endforeach; ?>
                  <?php if(!$seleccionado): ?>
                        <option value="" disabled>>--Selecciona un estado--<</option>
                  <?php endif; ?>
               </select>
            </div>

            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="recoleccion"">Recoleccion</label>
               <input name="reserva[res_fechaRenta]'" class="formulario-Reservas_input" type="date" id="recoleccion" min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
            </div>

            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="horario"">Horario</label>
               <input name="reserva[res_horaRenta]'" class="formulario-Reservas_input" type="time" id="horario">
            </div>

            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="devolucion"">Devolucion</label>
               <input name="reserva[res_fechaEntrega]'" class="formulario-Reservas_input" type="date" id="devolucion" min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
            </div>

            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="horario"">Horario</label>
               <input name="reserva[res_horaEntrega]'" class="formulario-Reservas_input" type="time" id="horario">
            </div>

            <div class="formulario-Reservas_campo">
               <label class="formulario-Reservas_label" for="pasajeros"">Dias</label>
               <input name="reserva[res_dias]'" class="formulario-Reservas_input" type="number" id="pasajeros" min="1">
            </div>
         </div>
   </section>


   <h3>¡Conoce todos nuestros vehiculos disponibles!</h3>

   <div class="contenedor cards-autos">
      <?php foreach($vehiculos as $vehiculo) : ?>
         <?php if($vehiculo->veh_disponibles != 0): ?>
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
                  <button type="submit" name="coche" value="<?php echo $vehiculo->veh_id ?>" class="boton-secundario-block">Reservar</button>
               </div> 
            </div><!-- .card-auto -->
         <?php endif; ?>
      <?php endforeach; ?> 
      </div>
   </section>

</form>
</main>