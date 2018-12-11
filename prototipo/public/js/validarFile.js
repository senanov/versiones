function validarFile() {
    var archivo = document.getElementById("acta").value;
    var documento = document.getElementById("documento").value;
    var ficha = document.getElementById("ficha").value;
    
    if (ficha == "") {
        
         swal("Complete el Campo Ficha");
        return false;

    }

    if (documento == "") {
        
         swal("Complete el Campo documento");
        return false;

    }    

    if (archivo == "") {
         swal("Seleccione un archivo en el Campo Acta");
        return false;
    }
    var extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
    if (extension != '.docx' && extension != '.doc') {
         swal("El Archivo "+extension+ " No es Compatible Por Favor Adjuntar un Documento de word"  );
        return false;
    }
}

function ficha() {
    var ficha = document.getElementById("num_ficha").value;
    if (isNaN(ficha)) {
         swal("La Ficha Debe ser un Número");
        return false;
    }
}


function programa() {

    var programa = document.getElementById("programa").value;   
    var tprograma = document.getElementById("tprograma").value;

    if (programa == "" || tprograma == "" ) {
        
         swal("Complete Todos los Campos");
        return false;
  }
}

function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }