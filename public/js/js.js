// Funciones que comprobaran si se quiere eliminar al usuario de la tabla
// Pendiente: Cambiar id de la segunda var por el nombre del user
function confirmar(msg, data, data_detail){
    var a = confirm(msg + ' ' + data_detail);
    debugger;
    return a;
}

function confirmarBorrarUsuario(data, data_detail){
    return  confirmar('Seguro que desea borrar al usuario', data, data_detail);
}

// Cada vez que se quiera eliminar un usuario, pista de padel... se llamara a la funcion borrar confirmar 