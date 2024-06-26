<fieldset>
    <legend>Automóvil</legend>

<!--Modelo-->
<div class="contenedor">

    <label for="modelo">Modelo</label>
    <input class="flex"  type="text" id="modelo" name="vehiculo[veh_modelo]" placeholder="Ingrese el modelo del carro" value="">
    </div>

    <!--Descripcion-->
    <div class="contenedor">
    <label for="descripcion">Descripcion</label>
    <textarea class="flex"  id="descripcion" name="vehiculo[veh_descripcion]"></textarea>            
    </div>

    <!--Motor-->
    <div class="contenedor">
    <label for="motor">Motor</label>
    <input class="flex"  type="text" id="motor" name="vehiculo[veh_cilindro]" placeholder="Ingrese caracteristicas de su motor" value="">
    </div>

    <!--Color-->
    <div class="contenedor">
    <label for="color">Color</label>
    <input class="flex"  type="text" id="color" name="vehiculo[veh_color]" placeholder="Ej. rojo" value="">
    </div>


    <!--Capacidad-->
    <div class="contenedor">
    <label for="capacidadPersonas">Capacidad pasajeros</label>
    <input class="flex"  type="number" id="capacidadPersonas" name="vehiculo[veh_pasajeros]" placeholder="Ingrese la cantidad de pasajeros" min="1" max="20" value="">
    </div>

    <!--Capacidad maletas-->
    <div class="contenedor">
    <label for="capacidadMaletas">Capacidad maletas</label>
    <input class="flex"  type="number" id="capacidadMaletas" name="vehiculo[veh_maletas]" placeholder="Ingrese la cantidad de maletas" min="1" max="20" value="">
    </div>

    <!--Manejo-->
    <div class="contenedor">
        <label>Manejo:</label>
            <select class="flex"  id="manejo" name="vehiculo[veh_manejo]">
                <option >Estandar</option>
                <option >Automatico</option>
            </select>
    </div>

    <!--Combustible-->
    <div class="contenedor">
        <label>Combustible:</label>
            <select class="flex"  id="combustible" name="vehiculo[veh_combustible]">
                <option >Gasolina</option>
                <option >Diesel</option>
            </select>
    </div>
    
        <!--Disponibilidad-->
    <div class="contenedor">
    <label for="disponibilidad">Disponibilidad</label>
    <input class="flex"  type="number" id="disponibilidad" name="vehiculo[veh_disponibles]" placeholder="Ingrese la cantidad disponibilidad" min="1" max="10" value="">
    </div>
    
    
    <!--Usuario-->
    <div class="contenedor">
    <label for="costoDia">costo por dia</label>
    <input class="flex"  type="text" id="costoDia" name="vehiculo[veh_costodia]" placeholder="Ingrese el costo po rdia" maxlength="5" value="" >
    </div>
    
    <!--Imagen-->
    <div class="contenedor">
        <label for ="imagen">Imagen:</label>
        <input type="file" id="imagen" name="vehiculo[veh_img]" accept="image/jpeg, image/png, image/webp">
    </div>

    <div class="contenedor ">

        <button type="submit" class="boton-primario-block">Registrar</button>

    </div>
</fieldset>