<main class="">
  <h1 class="centrar-texto">Transaccion</h1>
  <div class="contenedor-pago">
      <div class="tarjeta">
        <div class="datos-personales size-form">
            <div class="formulario-datos ">
                   <h4>Tus Datos</h4>
                    <div class="size-form">
                      
                      <div class="grid-cobro">
                        <p class="flex"><span class="bold">Nombre:</span> Juan Hernandez </p>
                      </div>

                      <div class="grid-cobro">
                        <p class="flex"><span class="bold">Usuarios: </span> Juan H </p>
                      </div>

                      <div class="grid-cobro">
                        <p class="flex"><span class="bold">telefono: </span> 4772345678</p>
                      </div>

                      <div class="grid-cobro">
                        <p class="flex"><span class="bold">Correo: </span>example@gmail.com</p>
                      </div>
                    </div>
                      <div class="contenedor tarjeta flex-gap">
                        <button type="submit" class="boton-primario-block  centrar-texto">Iniciar sesion</button>
                      </div>
              </div>
          </div>


        <!--Formulario tarjeta-->

        <div class="tarjeta">
          <form class="formulario padding-arriba" id="formulario" method="POST" action="login.html">

          
            <fieldset class="tarjeta-fildeset">
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

              <div class="grid-formulario ">
                <div class="expira">
                  <label for="selectMes">Expiracion</label>
                  <div class="grid-formulario">
                    <div class="grid-formulario ">
                      <select name="mes" id="selectedMes">
                        <option disabled selected>Mes</option>
                      </select>
                      <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="grid-formulario">
                      <select name="year" id="selectedyear">
                        <option disabled selected>Año</option>
                      </select>
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </div>
                </div>

                <div class="ccv" >
                  <label for="imputCVV">CVV</label>
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
                  
                  
                </div> 
            </div>
          </div>
        </div>
    </div>
  </div>
    
</main>