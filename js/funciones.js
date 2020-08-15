function validar() {
    var departamento, ciudad, nombre, correo;
    departamento = document.getElementById("departemento").value;
    ciudad = document.getElementById("ciudad").value;
    nombre = document.getElementById("nombre").value;
    correo = document.getElementById("correo").value;

    expresion = /\w+@\w+\.+[a-z]/;

    if (nombre === "" || correo === "") {
        alert("El campo departamento esta vacio");
        return false;
    } else if (departamento.length > 30) {
        alert("Nombre del departamento esta muy largo");
        return false;
    } else if (ciudad.length > 50) {
        alert("Nombre de la ciudad esta muy largo");
        return false;
    } else if (nombre.length > 50) {
        alert("Nombre  esta muy largo");
        return false;
    } else if (correo.length > 30) {
        alert("Correo esta muy largo");
        return false;
    } else if (!expresion.test(correo)) {
        alert("El correo no es valido");
        return false;
    }
}

function validarFormVacio(formulario) {
    datos = $('#' + formulario).serialize();
    d = datos.split('&');
    vacios = 0;
    for (i = 0; i < d.length; i++) {
        controles = d[i].split("=");
        if (controles[1] == "A" || controles[1] == "") {
            vacios++;
        }
    }
    return vacios;
}