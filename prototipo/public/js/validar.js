$("#ndocumento").keyup(function() {
    var documento = $("#ndocumento").val();
    var dato = new FormData();
    dato.append("vdocumento", documento);
    $.ajax({
        url: "../../senanov3.5/Ajax/validarDocumento",
        method: "POST",
        data: dato,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            document.getElementById("aviso").innerHTML = respuesta;
            console.log(respuesta);
        }
    });
});
$("#correo").keyup(function() {
    var documento = $("#correo").val();
    var dato = new FormData();
    dato.append("vcorreo", documento);
    $.ajax({
        url: "../../senanov3.5/Ajax/validarCorreo",
        method: "POST",
        data: dato,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            document.getElementById("aviso").innerHTML = respuesta;
            console.log(respuesta);
        }
    });
});
$("#usuario").change(function() {
    var documento = $("#usuario").val();
    var dato = new FormData();
    dato.append("vusuario", documento);
    $.ajax({
        url: "../../senanov3.5/Ajax/validarUsuarioActivo",
        method: "POST",
        data: dato,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            document.getElementById("mensaje").innerHTML = respuesta;
            console.log(respuesta);
        }
    });
});
$("#ndocumento").keyup(function() {
    var documento = $("#ndocumento").val();
    var dato = new FormData();
    dato.append("vdocumento", documento);
    $.ajax({
        url: "../../senanov3.5/Ajax/completarRegistro",
        method: "POST",
        data: dato,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            var datos = JSON.parse(respuesta);
            $('#primer_nombre').val(datos.primer_nombre);
            $("#primer_nombre").prop('disabled', true);
            $('#segundo_nombre').val(datos.segundo_nombre);
            $("#segundo_nombre").prop('disabled', true);
            $('#primer_apellido').val(datos.primer_apellido);
            $("#primer_apellido").prop('disabled', true);
            $('#segundo_apellido').val(datos.segundo_apellido);
            $("#segundo_apellido").prop('disabled', true);
            $('#tdocumento').val(datos.tipo_documento);
            $("#tdocumento").prop('disabled', true);
            $('#ndocumento').val(datos.documento_usuario);
            $("#ndocumento").prop('disabled', true);
            $('#ndocumento1').val(datos.documento_usuario);
            $("#ndocumento1").prop('disabled', false);
            //console.log(datos);
        },
        error: function(respuesta) {
            console.error(respuesta);
        }
    });
});
$("#programa").change(function() {
    var documento = $("#programa").val();
    var jornada = $("#jornada").val();
    var dato = new FormData();
    dato.append("programa", documento);
    dato.append("jornada", jornada);
    $.ajax({
        url: "../../senanov3.5/Ajax/validarTrimestres",
        method: "POST",
        data: dato,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            if (respuesta == 2) {
                $("#trimestre").empty();
                $("#trimestre").append('<option disabled Selected value="">Seleccione Trimestre</option> <option value="1">Primero</option> <option value="2">Segundo</option>');
                //$("#trimestre").append('<option value="2">Segundo</option>');
            }
            if (respuesta == 4) {
                $("#trimestre").empty();
                $("#trimestre").append('<option disabled Selected value="">Seleccione Trimestre</option> <option value="1">Primero</option> <option value="2">Segundo</option> <option value="3">Tercero</option> <option value="4">Cuarto</option>');
            }
            if (respuesta == 6) {
                $("#trimestre").empty();
                $("#trimestre").append('<option disabled Selected value="">Seleccione Trimestre</option> <option value="1">Primero</option> <option value="2">Segundo</option> <option value="3">Tercero</option> <option value="4">Cuarto</option> <option value="5">Quinto</option> <option value="6">Sexto</option>');
            }
            if (respuesta == 8) {
                $("#trimestre").empty();
                $("#trimestre").append('<option disabled Selected value="">Seleccione Trimestre</option> <option value="1">Primero</option> <option value="2">Segundo</option> <option value="3">Tercero</option> <option value="4">Cuarto</option> <option value="5">Quinto</option> <option value="6">Sexto</option> <option value="7">Septimo</option> <option value="8">Octavo</option>');
            }
        }
    });
});

$("#jornada").change(function() {
    var documento = $("#programa").val();
    var jornada = $("#jornada").val();
    var dato = new FormData();
    dato.append("programa", documento);
    dato.append("jornada", jornada);
    $.ajax({
        url: "../../senanov3.5/Ajax/validarTrimestres",
        method: "POST",
        data: dato,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            if (respuesta == 2) {
                $("#trimestre").empty();
                $("#trimestre").append('<option disabled Selected value="">Seleccione Trimestre</option> <option value="1">Primero</option> <option value="2">Segundo</option>');
                //$("#trimestre").append('<option value="2">Segundo</option>');
            }
            if (respuesta == 4) {
                $("#trimestre").empty();
                $("#trimestre").append('<option disabled Selected value="">Seleccione Trimestre</option> <option value="1">Primero</option> <option value="2">Segundo</option> <option value="3">Tercero</option> <option value="4">Cuarto</option>');
            }
            if (respuesta == 6) {
                $("#trimestre").empty();
                $("#trimestre").append('<option disabled Selected value="">Seleccione Trimestre</option> <option value="1">Primero</option> <option value="2">Segundo</option> <option value="3">Tercero</option> <option value="4">Cuarto</option> <option value="5">Quinto</option> <option value="6">Sexto</option>');
            }
            if (respuesta == 8) {
                $("#trimestre").empty();
                $("#trimestre").append('<option disabled Selected value="">Seleccione Trimestre</option> <option value="1">Primero</option> <option value="2">Segundo</option> <option value="3">Tercero</option> <option value="4">Cuarto</option> <option value="5">Quinto</option> <option value="6">Sexto</option> <option value="7">Septimo</option> <option value="8">Octavo</option>');
            }
        }
    });
});
//http://localhost:8082/prototipo3.5/views/ajax/ajax.php;