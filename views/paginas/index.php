<section class="contenedor quienes-somos">
    <div class="quienessomos_imagen">
        <img src="./build/src/img/quienes_somos.webp" alt="imagen de referencia">
    </div>
    <div class="quienessomos_info">
        <h3>¿Quienes Somos?</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam odit omnis repellat expedita veritatis tenetur itaque quibusdam quam, officia dolor eos labore at! Sit minus fugiat non numquam. Ipsum, explicabo!
        Repellat dolore commodi culpa aliquam nisi sit quos cumque vero unde quis deserunt, ducimus eaque perspiciatis odio debitis animi id fuga quisquam eum dicta! Quis soluta ex minima dignissimos numquam?</p>
    </div>
</section>

<section class="contenedor-flota">
    <h3>Los vehiculos mas solicitados</h3>

    <div class="contenedor cards-autos">

        <?php foreach($vehiculos as $vehiculo) : ?>
            <div class="card-auto">
                <img src="./build/src/img/coches/<?php echo $vehiculo->veh_img?>" alt="img del auto">

                <div class="card-info">
                    <h4> <?php echo $vehiculo->veh_modelo?> </h4>
                    <p><?php echo $vehiculo->veh_descripcion?></p>
                    <p></p>
                    <ul class="caracteristicas">
                        <li>
                            <img class="icono" src="./build/src/img/asiento_icono.svg" alt="">
                            <p><?php echo $vehiculo->veh_pasajeros?> Pasajeros</p>
                        </li>
                        <li>
                            <img class="icono" src="./build/src/img/maleta_icono.svg" alt="">
                            <p><?php echo $vehiculo->veh_maletas?> Maletas</p>
                        </li>
                        <li>
                            <img class="icono" src="./build/src/img/transmision_icono.svg" alt="">
                            <p><?php echo $vehiculo->veh_manejo?></p>
                        </li>
                        <li>
                            <img class="icono" class="icono" src="./build/src/img/motor_icono.svg" alt="">
                            <p><?php echo $vehiculo->veh_cilindro?></p>
                        </li>
                    </ul>
                    <button class="boton-secundario-block">Reservar</button>
                </div> 
            </div><!-- .card-auto -->
        <?php endforeach; ?>    
    </div>
    <a  href="/flota_vehiculos" class="flota_vehiculos contenedor">
      <input type="submit" class="flota_vehiculos__boton" value="Descubrir más">
    </a>
</section>

<section class="sobrenosotros contenedor">
         <h3 class="comprar_titulo">Caracteristicas de nuestros automóviles</h3>

         <div class="bloques">
            <div class="bloque sobrenosotros__bloque">
               <img class ="bloque__img" src="/build/src/img/icon/bolsa-de-aire.webp" alt="imagen descripcion de carro 1">
               <h3 class="bloque__titulo">Bolsas de Aire</h3>
            </div> <!-- .bloque -->

            <div class="bloque sobrenosotros__bloque">
               <img class ="bloque__img" src="/build/src/img/icon/sensor.webp" alt="imagen descripcion de carro 2">
               <h3 class="bloque__titulo">Sensores y Sistema Eléctrico</h3>
            </div> <!-- .bloque -->

            <div class="bloque sobrenosotros__bloque">
               <img class ="bloque__img" src="/build/src/img/icon/disco-del-freno.webp" alt="imagen descripcion de carro 3">
               <h3 class="bloque__titulo">Frenos de disco</h3>
            </div> <!-- .bloque -->

            <div class="bloque sobrenosotros__bloque">
               <img class ="bloque__img" src="/build/src/img/icon/disco-del-freno.webp" alt="imagen descripcion de carro 3">
               <h3 class="bloque__titulo">Dirección Hidraulica</h3>
            </div> <!-- .bloque -->
         </div>
   </section>