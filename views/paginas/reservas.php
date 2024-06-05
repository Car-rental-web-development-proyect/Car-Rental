<main>
   <div class="reservas-bg">
      <img src="/build/src/img/reserva02.webp" alt="reserva-img">
   </div>   

   <section class="seccion">
      <form action="/flota_vehiculos" class="formulario-Reservas contenedor" method="GET">
         
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
                     <option value="" disabled>>--Estado Faltante--<</option>
               <?php endif; ?>
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

   <section class="detalles-promocion contenedor">
         <div class="descuento-img">
            <img src="/build/src/img/destinations.webp" alt="destino">
         </div>

         <div class="descuento-texto">
            <h3>Aprovecha nuestras promociones y viaja a tu destino favorito</h3>

            <p>Renta un auto desde $399 por día</p>
            <p class="descuento-texto_parrafo">Puedes pagar en mostrador con tarjetas BBVA o Citibanamex a 3 y 6 MSI</p>
         </div>
   </section>

   <section class="comprar">
         <h3 class="comprar_titulo">¿Por qué rentar con nosotros?</h3>

         <div class="bloques">
            <div class="bloque">
               <img class ="bloque__img" src="/build/src/img/icon/icono1.png" alt="por que comprar con nosotros">
               <h3 class="bloque__titulo">Seguridad en todo momento</h3>
               <p>Tu seguridad y la de los tuyos es nuestra prioridad, te cuidamos en todos los detalles</p>
            </div> <!-- .bloque -->

            <div class="bloque">
               <img class ="bloque__img" src="/build/src/img/icon/icono2.png" alt="por que comprar con nosotros">
               <h3 class="bloque__titulo">Autos confiables y rápidos</h3>
               <p>Contamos con una amplia gama de vehículos recientes</p>
            </div> <!-- .bloque -->

            <div class="bloque">
               <img class ="bloque__img" src="/build/src/img/icon/icono3.png" alt="por que comprar con nosotros">
               <h3 class="bloque__titulo">Reserva eficaz, con garantia</h3>
               <p>Puedes hacer tu reservación en Linea y gestionar detalles desde la web</p>
            </div> <!-- .bloque -->

            <div class="bloque">
               <img class ="bloque__img" src="/build/src/img/icon/icono4.png" alt="por que comprar con nosotros">
               <h3 class="bloque__titulo">Llega siempre a tus destinos</h3>
               <p>Autos equipados con las innovaciones tecnologias del momento</p>
            </div> <!-- .bloque -->
         </div>
   </section>
</main>