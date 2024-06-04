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

        <?php for($i = 0; $i < 3; $i++) : ?>
            <div class="card-auto">
                <img src="./build/src/img/coches/vento.webp" alt="img del auto">

                <div class="card-info">
                    <h4>Volkswagen Vento</h4>
                    <p>Sedán Compacto, 2024</p>
                    <p></p>
                    <ul class="caracteristicas">
                        <li>
                            <img class="icono" src="./build/src/img/asiento_icono.svg" alt="">
                            <p>4 Pasajeros</p>
                        </li>
                        <li>
                            <img class="icono" src="./build/src/img/maleta_icono.svg" alt="">
                            <p>4 Maletas</p>
                        </li>
                        <li>
                            <img class="icono" src="./build/src/img/transmision_icono.svg" alt="">
                            <p>Estandar</p>
                        </li>
                        <li>
                            <img class="icono" class="icono" src="./build/src/img/motor_icono.svg" alt="">
                            <p>1.6L 4 cilindros</p>
                        </li>
                    </ul>
                    <button class="boton-secundario-block">Reservar</button>
                </div> 
            </div><!-- .card-auto -->
        <?php endfor; ?>    
    </div>
    <a  href="/flota_vehiculos" class="flota_vehiculos contenedor">
      <input type="submit" class="flota_vehiculos__boton" value="Descubrir más">
    </a>
</section>

<section class="sobrenosotros contenedor">
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
         </div>
   </section>