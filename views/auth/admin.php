<div class="contenedor">

    
    <a href="/registrarAuto" class="boton-secundario-block">Nuevo Vehiculo</a>

    <table class="vehiculos">
        <thead>
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Descripción</th>
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
            <?php foreach($vehiculos as $vehiculo) : ?>
            <tr> <!-- Este es solo un renglon de la tabla -->
                <td><?php echo $vehiculo->veh_id?></td>
                <td><?php echo $vehiculo->veh_modelo?></td>
                <td><?php echo $vehiculo->veh_descripcion?></td>
                <td><?php echo $vehiculo->veh_color?></td>
                <td> 
                    <div class="info-icono">
                        <img class="icono" src="./build/src/img/asiento_icono.svg" alt="">
                        <p><?php echo $vehiculo->veh_pasajeros?></p>
                    </div>
                </td>
                <td>
                    <div class="info-icono">
                        <img class="icono" src="./build/src/img/maleta_icono.svg" alt="">
                        <p><?php echo $vehiculo->veh_maletas?></p>
                    </div>
                </td>
                <td>
                    <div class="info-icono">
                        <img class="icono" src="./build/src/img/transmision_icono.svg" alt="">
                        <p><?php echo $vehiculo->veh_manejo?></p>
                    </div>
                </td>
                <td>
                    <div class="info-icono">
                        <img class="icono" src="./build/src/img/motor_icono.svg" alt="">
                        <p><?php echo $vehiculo->veh_combustible?></p>
                    </div>
                </td>
                <td><?php echo $vehiculo->veh_disponibles?></td>
                <td>$<?php echo $vehiculo->veh_costodia?></td>
                <td><img class="imagen-tabla" src="./build/src/img/coches/<?php echo $vehiculo->veh_img?>" alt="img del auto"></td>
                <td>
                    <form method="POST" class="" action="vehiculos/eliminar"> <!-- Para eliminar una propiedad, es necesario redireccionar, al presionar el boton eliminar se redigira y ara su accion en el controlador-->
                            <input type="hidden" name="id" value="<?php echo $vehiculo->veh_id; ?>">    <!-- Debido a que para mandar datos por el POST del formulario necesitamos un dato, lo mandamos por aqui-->
                            <input type="hidden" name="tipo" value="vehiculo">
                            <input type="submit" class="boton-primario-block" value="Eliminar">
                    </form>

                    <a href="actualizarAuto?id=<?php echo $vehiculo->veh_id?>" class="boton-secundario-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>