
function ValidaSoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57))
  event.returnValue = false;
}


function SoloLetras() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;  
  }

  
function validarUsuarios(){
 if ((event.keyCode < 48) || (event.keyCode > 57)  && (event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;  
}


