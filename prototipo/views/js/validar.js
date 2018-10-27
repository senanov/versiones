$("#ndocumento").change(function(){

var documento = $("#ndocumento").val();
var dato = new FormData();
dato.append("vdocumento",documento);


$.ajax({
   url:"views/ajax/ajax.php",
   method:"POST",
   data:dato,
   cache:false,
   contentType:false,
   processData:false,
   success:function(respuesta){

      document.getElementById("aviso").innerHTML = respuesta;
   	console.log(respuesta);
   }

});
	
});

$("#correo").change(function(){

var documento = $("#correo").val();
var dato = new FormData();
dato.append("vcorreo",documento);


$.ajax({
   url:"views/ajax/ajax.php",
   method:"POST",
   data:dato,
   cache:false,
   contentType:false,
   processData:false,
   success:function(respuesta){

      document.getElementById("aviso").innerHTML = respuesta;
      console.log(respuesta);
   }

});
   
});


$("#usuario").change(function(){

var documento = $("#usuario").val();
var dato = new FormData();
dato.append("vusuario",documento);


$.ajax({
   url:"views/ajax/ajax.php",
   method:"POST",
   data:dato,
   cache:false,
   contentType:false,
   processData:false,
   success:function(respuesta){

      document.getElementById("aviso").innerHTML = respuesta;
      console.log(respuesta);
   }

});
   
});
//http://localhost:8082/prototipo3.5/views/ajax/ajax.php;