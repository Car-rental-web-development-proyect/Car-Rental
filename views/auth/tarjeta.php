<?php
    if(!isset($_SESSION)) {
      session_start();
    }

    $auth = $_SESSION['login'] ?? null;
    $usuario = $_SESSION['usuario'] ?? null;
?>

<main class="">
  <h1 class="centrar-texto">Transaccion</h1>
  <div class="grid-pago">
      <div class="">
        <div class="">
            <div class="tamaño-datos">
                   <h4 class="centrar-texto no-margin">Tus Datos</h4>
                    <div class="contenedor-datos">
                      
                      <div class="<?php echo $loguear = (!$auth) ? 'sinlogeado' : '' ?>">
                        <div class="grid-datos">
                          <p class=""><span class="bold">Nombre:</span> <?php echo $usuario->usu_nombre;?> <?php echo $usuario->usu_apepaterno;?> <?php echo $usuario->usu_apematerno;?></p>
                        </div>

                        <div class="grid-datos">
                          <p class="flex"><span class="bold">Correo: </span> <?php echo $usuario->usu_correo ?></p>
                        </div>
                      </div>
                      <div class="<?php echo $loguear = ($auth) ? 'logeado' : '' ?>">
                        <p class="flex">Necesitas iniciar sesion para continuar</p>
                        <a href="/login" class="boton-primario-block centrar-texto contenedor-datos">Iniciar sesion</a>
                      </div>
                    </div>
              </div>
          </div>


        <!--Formulario tarjeta-->
        <div class="tamaño-tarjeta <?php echo $loguear = (!$auth) ? 'sinlogeado' : '' ?>">
          <form class="" id="formulario" method="POST" action="">

            <input type="hidden" name="operacion" value="pagar" autocomplete="off">

            <!-- DATOS DE LA AGENCIA  -->
            <input type="hidden" name="reserva[res_oficinaRenta]" value="<?php echo $agencia->age_id ?>">
            <input type="hidden" name="reserva[res_oficinaEntrega]" value="<?php echo $agencia->age_id ?>">
            <input type="hidden" name="reserva[res_fechaRenta]" value="<?php echo $reserva['res_fechaRenta'] ?>">
            <input type="hidden" name="reserva[res_horaRenta]" value="<?php echo $reserva['res_horaRenta'] ?>">
            <input type="hidden" name="reserva[res_fechaEntrega]" value="<?php echo $reserva['res_fechaEntrega'] ?>">
            <input type="hidden" name="reserva[res_horaEntrega]" value="<?php echo $reserva['res_horaEntrega'] ?>">
            <input type="hidden" name="reserva[res_costo]" value="<?php echo (($vehiculo->veh_costodia * 0.16) + ($vehiculo->veh_costodia * $reserva['res_dias'])) ?>">
            <input type="hidden" name="reserva[res_usu_id]" value="<?php echo $usuario->usu_id ?>">
            <input type="hidden" name="reserva[res_veh_id]" value="<?php echo $vehiculo->veh_id ?>">

            <fieldset class="">
              <legend>Tarjeta</legend>
              <!--numero-->
              <div class="">
                <label for="numeroTarjeta">Numero de tarjeta</label>
                <input class="flex" type="number" id="numeroTarjeta" maxlength="19" minlength="19" name="tarjeta[tar_numTarjeta]" autocomplete="off" >
              </div>
              
              <!--nombre-->
              <div class="">
                <label for="nombre">Nombre</label>
                <input class="flex" type="text" id="nombre" name="tarjeta[nombre]"  maxlength="19"  name="" autocomplete="off">        
              </div>

              <div class="expiracion">
                <div class="expiracion">
                  <label for="selectMes">Expiracion</label>
                  <div  class="expiracion">
                    <div class="">
                      <select name="tarjeta[mes]" id="selectedMes">
                        <option disabled selected>Mes</option>
                        <?php for($i = 1; $i < 13; $i++): ?>
                          <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="">
                      <select name="tarjeta[anio]" id="selectedyear">
                        <option disabled selected>Año</option>
                        <?php for($i = 24; $i < 60; $i++): ?>
                          <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php endfor; ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="" >
                  <label for="imputCVV">CVV:</label>
                  <input  name="tarjeta[cvv]" type="password" id="imputCVV" maxlength="3">
                </div>
              </div>
            <button type="submit" class="boton-primario-block">Enviar</button>
              
            </fieldset>
          </form>

        </div>
      </div>

      <div class="datos-renta">
        <h4 class="centrar-texto">Resumen de tu reserva</h4>
        <div class="contenedor">
          <div class="card-auto">
              <img src="./build/src/img/coches/<?php echo $vehiculo->veh_img; ?>" alt="img del auto">

              <div class="card-info">
                  <h4> <?php echo $vehiculo->veh_modelo; ?> </h4>
                  <p> <?php echo $vehiculo->veh_descripcion; ?></p>
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
                  <h4>Lugar y fecha</h4>
                  <p><span class="bold">Entrega: </span><?php echo $reserva['res_fechaRenta'] ?>, <?php echo $agencia->age_agencia ?></p>
                  <p><span class="bold">Devolucion: </span><?php echo $reserva['res_fechaEntrega'] ?>, <?php echo $agencia->age_agencia ?></p>
                  <h4>Beneficios</h4>
                  <p>TP</p>
                  <p>Proteccion seguro contra accidentes</p>
                  <h4>Detalles del precio</h4>
                  <p><span class="bold">Precio por dia: </span> <?php echo $vehiculo->veh_costodia ?> </p>
                  <p><span class="bold">Iva(1.16): </span> $ <?php echo ($vehiculo->veh_costodia * 0.16) ?></p>
                  <p><span class="bold">Dias:</span> <?php echo $reserva['res_dias'] ?> dias</p>
                  <p><span class="bold">Total:</span> $<?php echo (($vehiculo->veh_costodia * 0.16) + ($vehiculo->veh_costodia * $reserva['res_dias'])) ?></p>
                  <p><span class="bold">Lugar de devolución de la unidad</span></p>

                  <section class="seccion">
                     <form class="formulario-Reservas contenedor form_tarjeta" action="" method="POST">

                     <div class="formulario-Reservas_campo">
                        <label class="formulario-Reservas_label" for="estado"">Estado</label>
                        <select class="formulario__combobox combobox-estado" id="selecionar_estado">
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
                        <select class="formulario__combobox" id="selecionar_ciudad">
                           <option value="" disabled selected>Ciudad</option>
                           <?php foreach($agencias as $agencia):?>
                              <option value="<?php echo $agencia->age_ciudad?>"><?php echo $agencia->age_ciudad?></option>
                           <?php endforeach; ?>
                           <?php if(!$seleccionado): ?>
                                 <option value="" disabled>>--Selecciona un estado--<</option>
                           <?php endif; ?>
                        </select>
                     </div>

                     </form>
                  </section>
                </div> 
            </div>
          </div>
        </div>
    </div>
  </div>
    
</main>