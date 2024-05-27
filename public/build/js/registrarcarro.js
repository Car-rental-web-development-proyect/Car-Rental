document.addEventListener('DOMContentLoaded', function(){
  const carro = {
    marca:'',
    linea:'',
    modelo: '',
    placa:'',
    capacidad: '',
    Descripcion:'',
  }

  //Seleccionamos los Elementos de la interfaz
  const inputMarca = document.querySelector('#marca');
  const inputLinea = document.querySelector('#linea');
  const inputModelo = document.querySelector('#modelo');
  const inputPlaca = document.querySelector('#placa');
  const inputCapacidad = document.querySelector('#capacidad');
  const inputDescripcion = document.querySelector('#descripcion');
  const formulario = document.querySelector('#formulario')

  //Asignar Eventos

  inputMarca.addEventListener('blur', validar);

  inputLinea.addEventListener('blur', validar);

  inputModelo.addEventListener('blur', validar);

  inputMarca.addEventListener('blur', validar);

  inputPlaca.addEventListener('blur', validar);

  inputCapacidad.addEventListener('blur', validar);

  inputDescripcion.addEventListener('blur', validar);

  formulario.addEventListener('submit',enviarCorreo);

  function enviarCorreo(e){
    e.preventDefault()

   }

  function validar(e) {
     if(e.target.value.trim() === ''){
      mostrarAlerta(`El campo ${e.target.id} es obligatorio`,e.target.parentElement);
      carro[e.target.name] = '';
      return ;
    }

    if(e.target.id==='correo' && !validarCorreo(e.target.value)){
      mostrarAlerta(`El correo no es valido`,e.target.parentElement);

      carro[e.target.name] = '';
      return;
    }

    limpiarAlerta(e.target.parentElement);

    carro[e.target.name] = e.target.value.trim().toLowerCase();
  
  }

  function mostrarAlerta(mensaje, referencia) {
    limpiarAlerta(referencia);

  // Generar alerta en Html
  const error = document.createElement('P'); // Crear un elemento en html
  error.textContent = mensaje;
  error.classList.add('bg-red-600');
  // Inyectar el error al formulario
  //formulario.innerHTML = error.innerHTML; // elimina previamente los elementos
  referencia.appendChild(error);
 }

 function limpiarAlerta(referencia){
  // Comprueba si existe una alerta
  const alerta = referencia.querySelector('.bg-red-600');
  if(alerta){
    alerta.remove()
  }
 }
});