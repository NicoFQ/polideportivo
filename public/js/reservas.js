// Se establece que las peticiones de haran al controlador de AJAX y se podra completar la URL
// de busqueda desde la peticion fetch
const URL = "http://" + window.location.host + "/ajax/"
let horario_seleccionado = []

/**
 * Funcion que permite PIDE datos al servidor
 * @param url: Direccion de la peticion
 */
const fetchAll = (url) => {
    fetch(url + "getHorariosClase")
        .then(noData => noData.json())
        .then(data => console.log(data))
}//fetchAll

/**
 * Funcion que permite ENVIAR datos al servidor
 * @param url: Direccion de la peticion que ESPERA datos
 * @param metodo: Metodos HTTP (get, post, put, delete, options)
 * @param data: Datos que enviara a la direccion establecida
 */
const sendData = (url, metodo, data) => {
    fetch(url + "getHorariosClase", {
        method: metodo,
        body: data
    })
        .then(noData => noData.json())
        .then(data => {
            // console.table(data.datos.horariosClase)
            crearEstruscturaClase(data.datos)
        })

}//sendData


const seleccionClase = () => {
    const select = document.getElementById("nombre_clase")
    const nombre_deporte = select.options[select.selectedIndex].value;
    const clase_id = Object.values(select.options[select.selectedIndex].dataset)[0]

    const id_deporte = select.options[select.selectedIndex].getAttribute("value")

    if (id_deporte == "--") {
        alert('Por favor selecciona un deporte');
    } else {
        /**
         * data: Para enviarle datos al server se crea un form con los ids y sus valores.
         * De esta manera controlamos lo que enviamos y con que id para poder buscarlo en la query
         * @type {FormData}
         */
        const data = new FormData();
        data.append("nombre_clase",nombre_deporte)
        // data.append("clase_id", clase_id)
        data.append("id", id_deporte)

        //Envio de datos al servidor
        sendData(URL, "post",data)

    }
}//selecionClase

/**
 * Funcion que obtiene un objeto e ira creando la estructura deseada y
 * la agregara al contenedor para mostrarlo por pantalla
 * @param obj: Objeto JSON con los datos esperados
 */
function crearEstruscturaClase(obj){
    const contenedor = document.getElementById("datos-clase")
    // console.log('horarios clase' ,obj.horariosClase)
    contenedor.removeChild(contenedor.children[0])
    let divPadre = document.createElement('div')
    obj.horariosClase.forEach((v,i) => {

        let estado = (v.disponible == 1) ? "Disponible": "No disponible";
        let diasSemana = formatDias(v.dias_semana.split(","));
        let template = `
            <div>
                <h2>${v.nombre_clase}</h2>
                <h3>Dias de la semana en los que se imparte la clase: <span>${diasSemana}</span></h3>
                    <div>
                        <p><span>Estado:</span> ${estado}</p>
                        <p><span>Hora inicio:</span> ${v.hora_inicio}</p>
                        <p><span>Hora fin:</span> ${v.hora_fin}</p>
                        <p><span>Nº máximo de alumnos: </span> ${v.max_alumnos}</p>
                        <button onclick="hacerReserva()" class="btn ok">Reservar</button>
                    </div>
            </div>
        `;
        // console.log(template)
        let divSec = document.createElement('div')
        divSec.innerHTML = template
        divPadre.appendChild(divSec)


    })
    contenedor.appendChild(divPadre)

}//crearEstructura

function hacerReserva(){
    const select = document.getElementById("nombre_clase")
    // const id_clase = select.options[select.selectedIndex].getAttribute("value")
    const clase_id = Object.values(select.options[select.selectedIndex].dataset)[0]
    const formReserva = new FormData()
    formReserva.append("clase_id", clase_id)

    fetch(URL + "setReservaClase",{
        method: "post",
        body:formReserva
    })
        .then(noData => noData.json())
        .then(data => {
             if(data.data == "noAbonado"){
                 alert("Para poder continuar debes comprar uno de nuestros bonos.");
                 window.location = "/pago/planes";
             }else{
                 alert("Te has apuntado a la clase correctamente.");
                 window.location = "/usuario"
             }
        })
}//hacerReserva
function formatDias(arr){
    let diasCompletos = [];
    arr.forEach(v => {
        switch (v) {
            case "L":
                diasCompletos.push("lunes")
                break;
            case "M":
                diasCompletos.push("martes")
                break;
            case "X":
                diasCompletos.push("miércoles")
                break;
            case "J":
                diasCompletos.push("jueves")
                break;
            case "V":
                diasCompletos.push("viernes")
                break;
            case "S":
                diasCompletos.push("sábado")
                break;
            case "D":
                diasCompletos.push("domingo")
                break;
        }
    })
    return diasCompletos.join(", ");
}