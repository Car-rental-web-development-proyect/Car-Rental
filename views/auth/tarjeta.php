<main class="">
  <h1 class="centrar-texto">Transaccion</h1>
  <div class="grid-pago">
      <div class="">
        <div class="">
            <div class="tamaño-datos">
                   <h4 class="centrar-texto no-margin">Tus Datos</h4>
                    <div class="contenedor-datos">
                      
                      <div class="grid-datos">
                        <p class=""><span class="bold">Nombre:</span> Juan Hernandez </p>
                      </div>

                      <div class="grid-datos">
                        <p class=""><span class="bold">Usuarios: </span> Juan H </p>
                      </div>

                      <div class="grid-datos">
                        <p class="flex"><span class="bold">telefono: </span> 4772345678</p>
                      </div>

                      <div class="grid-datos">
                        <p class="flex"><span class="bold">Correo: </span>example@gmail.com</p>
                      </div>
                      <button type="submit" class="boton-primario-block  centrar-texto contenedor-datos">Iniciar sesion</button>
                    </div>
                     
                      
              </div>
          </div>


        <!--Formulario tarjeta-->
        <div class="tamaño-tarjeta">
          <form class="" id="formulario" method="POST" action="login.html">

          
            <fieldset class="">
              <legend>Tarjeta</legend>
              <!--numero-->
              <div class="">
                <label for="numeroTarjeta">Numero de tarjeta</label>
                <input class="flex" type="text" id="numeroTarjeta" maxlength="19"  name="nombre" autocomplete="off" >
              </div>
              
              <!--nombre-->
              <div class="">
                <label for="nombre">Nombre</label>
                <input class="flex" type="text" id="nombre" name="apellido"  maxlength="19"  name="nombre" autocomplete="off">        
              </div>

              <div class="expiracion">
                <div class="expiracion">
                  <label for="selectMes">Expiracion</label>
                  <div class="expiracion">
                    <div class="">
                      <select name="mes" id="selectedMes">
                        <option disabled selected>Mes</option>
                      </select>
                    </div>
                    <div class="">
                      <select name="year" id="selectedyear">
                        <option disabled selected>Año</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="" >
                  <label for="imputCVV">CVV:</label>
                  <input type="password" id="imputCVV" maxlength="3">
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
              <img src="./build/src/img/coches/vento.webp" alt="img del auto">

              <div class="card-info">
                  <h4>Volkswagen Vento</h4>
                  <p>Sedán Compacto, 2024</p>
                  <ul class="caracteristicas">
                      <li>
                          <img src="./build/src/img/asiento_icono.svg" alt="">
                          <p>4 Pasajeros</p>
                      </li>
                      <li>
                          <img src="./build/src/img/maleta_icono.svg" alt="">
                          <p>4 Maletas</p>
                      </li>
                      <li>
                          <img src="./build/src/img/transmision_icono.svg" alt="">
                          <p>Estandar</p>
                      </li>
                      <li>
                          <img src="./build/src/img/motor_icono.svg" alt="">
                          <p>1.6L 4 cilindros</p>
                      </li>
                  </ul>
                  <h4>Lugar y fecha</h4>
                  <p><span class="bold">Entrega: </span>Lun. 03 de junio 12:00pm, Jalisco</p>
                  <p><span class="bold">Devolucion: </span>Lun. 10 de junio 12:00pm, Jalisco</p>
                  <h4>Beneficios</h4>
                  <p>TP</p>
                  <p>Proteccion seguro contra accidentes</p>
                  <h4>Detalles del precio</h4>
                  <p><span class="bold">Precio por dia: </span> $250</p>
                  <p><span class="bold">Iva(1.16): </span>  $50</p>
                  <p><span class="bold">Dias:</span> 7 dias</p>
                  <p><span class="bold">Extras:</span> $200</p>
                  <p><span class="bold">Total:</span> $2600</p>
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