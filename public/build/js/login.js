document.addEventListener('DOMContentLoaded', function(){
  const login = {
    usuario:'',
    correo:'',
    password: '',
  }

  //Seleccionamos los Elementos de la interfaz
  const inputUsuario = document.querySelector('#usuario');
  const inputCorreo = document.querySelector('#correo');
  const inputPassword = document.querySelector('#password');
  const formulario = document.querySelector('#formulario')

  //Asignar Eventos

  inputUsuario.addEventListener('blur', validar);

  inputCorreo.addEventListener('blur', validar);

  inputPassword.addEventListener('blur', validar);

  formulario.addEventListener('submit',enviarCorreo);

  function enviarCorreo(e){
    e.preventDefault()

   }

  function validar(e) {
     if(e.target.value.trim() === ''){
      mostrarAlerta(`El campo ${e.target.id} es obligatorio`,e.target.parentElement);
      login[e.target.name] = '';
      
      comprobarLogin();
      return ;
    }

    if(e.target.id==='correo' && !validarCorreo(e.target.value)){
      mostrarAlerta(`El correo no es valido`,e.target.parentElement);

      login[e.target.name] = '';
      //Comprobar emaiil
      comprobarLogin();
      return;
    }

    limpiarAlerta(e.target.parentElement);

    login[e.target.name] = e.target.value.trim().toLowerCase();
  
    comprobarLogin();
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

 function validarCorreo(email) {
  const regex = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;  // Expresion regular
  const resultado = regex.test(email);
  return resultado;
}

function comprobarLogin() {
  //console.log(Object.values(email).includes('')) // va a retornar tru or false dependiendo si el objeto esta vacio
  // Object.values(emaail) 
  // datos dentro del Objeto
  if(Object.values(correo).includes('')){
    btnSubmit.classList.add('opacity-50');
    btnSubmit.disabled = true;
    return ;
  }
}

});