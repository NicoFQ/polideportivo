// Se establece que las peticiones de haran al controlador de AJAX y se podra completar la URL
// de busqueda desde la peticion fetch
const URL = "http://" + window.location.host + "/ajax/"



/**
 * Funcion que permite ENVIAR datos al servidor
 * @param url: Direccion de la peticion que ESPERA datos
 * @param metodo: Metodos HTTP (get, post, put, delete, options)
 * @param data: Datos que enviara a la direccion establecida
 */
const sendData = (url, metodo, data) => {
    fetch(url + "validacionReserva", {
        method: metodo,
        body: data
    })
        .then(noData => noData.json())
        .then(data => {
            // console.table(data.horariosClase)
            if(data.datos.error){
                alert(data.datos.error);
            }
            crearEstruscturaInsta(data.datos)
            //console.log(data.datos);
        })

}//sendData


const seleccionClase = () => {
    const select = document.getElementById("nombreDeporte");
    const nombre_deporte = select.options[select.selectedIndex].value;
    const select2 = document.getElementById("hora");
    let  hora = select2.options[select2.selectedIndex].value;
    horaI = hora.substr(0, 2) + ":00";
    horaF  = hora.substr((hora.length - 2),hora.length ) + ":00";

    const fecha =  document.getElementById("date").value;
    

        /**
         * data: Para enviarle datos al server se crea un form con los ids y sus valores.
         * De esta manera controlamos lo que enviamos y con que id para poder buscarlo en la query
         * @type {FormData}
         */
        const data = new FormData();
        data.append("nombre_deporte",nombre_deporte)
        data.append("horaInicio", horaI)
        data.append("horaFin", horaF)
        data.append("fecha", fecha)

        //Envio de datos al servidor
        sendData(URL, "post",data)

    
}//selecionClase

/**
 * Funcion que obtiene un objeto e ira creando la estructura deseada y
 * la agregara al contenedor para mostrarlo por pantalla
 * @param obj: Objeto JSON con los datos esperados
 */
function crearEstruscturaInsta(obj){

    const contenedor = document.getElementById("datos-intalacion");
    contenedor.removeChild(contenedor.childNodes[0]);
    // console.log('obj pid', obj)
        let template = `
            <div>
                <h2>${obj.nombre}</h2>
                
                    <div>
                        <p><span>Lugar:</span> ${obj.lugar}</p>
                        <p><span>Hora inicio:</span> ${obj.inicio}</p>
                        <p><span>Hora fin:</span> ${obj.fin}</p>
                        <p><span>Fecha: </span> ${obj.fecha}</p>
                        <p><span>Precio:</span> <span id="precio">${obj.precio}</span></p>
                        <input type="hidden" value="${obj.pista_id}" id="id_pista">
                        <button onclick="hacerReserva()" class="btn ok">Reservar</button>
                    </div>
            </div>
        `;
        contenedor.innerHTML = template;
        console.log(obj.pista_id);
   

}//crearEstructura

function hacerReserva(){
    console.log("hacer reserva")
    // const select = document.getElementById("nombre_clase")
    // const id_clase = select.options[select.selectedIndex].getAttribute("value")

    const select = document.getElementById("nombreDeporte");
    const nombre_deporte = select.options[select.selectedIndex].value;
    const select2 = document.getElementById("hora");
    let  hora = select2.options[select2.selectedIndex].value;
    horaI = hora.substr(0, 2) + ":00";
    horaF  = hora.substr((hora.length - 2),hora.length ) + ":00";

    const fecha =  document.getElementById("date").value;
    const id_pista = document.getElementById("id_pista").value;
    const precio = document.getElementById("precio").textContent

    const formReserva = new FormData()
    formReserva.append("id_pista", id_pista)
    // formReserva.append("nombre_deporte",nombre_deporte)
    formReserva.append("horaInicio", horaI)
    formReserva.append("precio", precio)
    formReserva.append("horaFin", horaF)
    formReserva.append("fecha", fecha)

    fetch(URL + "setReservaInstalacion",{
        method: "post",
        body:formReserva
    })
        .then(noData => noData.json())
        .then(data => {
             if(data.data == "pendientePago"){
                 alert("Procederá a ver la factura.");
                 window.location = "/pago/pagoInstalacion";
             }
             // else{
             //     alert("Te has apuntado a la clase correctamente.");
             //     window.location = "/pago/pagoInstalacion";
             // }
            console.log(data)
        })
}//hacerReserva

