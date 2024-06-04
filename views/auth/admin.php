<div class="contenedor">

    
    <a href="/registrarAuto" class="boton-secundario-block">Nuevo Vehiculo</a>

    <table class="vehiculos">
        <thead>
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Pasajeros</th>
                <th>Maletas</th>
                <th>Manejo</th>
                <th>Combustible</th>
                <th>Disponible</th>
                <th>Costo x Dia</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody> <!-- Mostrar los datos de la base de datos -->
            <?php for($i = 0; $i < 5; $i++) : ?>
            <tr> <!-- Este es solo un renglon de la tabla -->
                <td> 1 </td>
                <td> Modelo</td>
                <td> Color </td>
                <td> 
                    <div class="info-icono">
                        <img class="icono" src="./build/src/img/asiento_icono.svg" alt="">
                        <p>4</p>
                    </div>
                </td>
                <td>
                    <div class="info-icono">
                        <img class="icono" src="./build/src/img/maleta_icono.svg" alt="">
                        <p>2</p>
                    </div>
                </td>
                <td>
                    <div class="info-icono">
                        <img class="icono" src="./build/src/img/transmision_icono.svg" alt="">
                        <p>Estandar</p>
                    </div>
                </td>
                <td>
                    <div class="info-icono">
                        <img class="icono" src="./build/src/img/motor_icono.svg" alt="">
                        <p>Premium</p>
                    </div>
                </td>
                <td> 4 </td>
                <td>$3232</td>
                <td><img class="imagen-tabla" src="./build/src/img/coches/vento.webp" alt="img del auto"></td>
                <td>
                    <form method="POST" class="" action=""> <!-- Para eliminar una propiedad, es necesario redireccionar, al presionar el boton eliminar se redigira y ara su accion en el controlador-->
                            <input type="hidden" name="id" value="">    <!-- Debido a que para mandar datos por el POST del formulario necesitamos un dato, lo mandamos por aqui-->
                            <input type="submit" class="boton-primario-block" value="Eliminar">
                    </form>

                    <a href="" class="boton-secundario-block">Actualizar</a>
                </td>
            </tr>
            <?php endfor; ?>
        </tbody>
    </table>

</div>