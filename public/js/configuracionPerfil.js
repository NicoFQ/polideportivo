// Si se usa un dominio se podra usar window.location || window.location.hostname
const HOST = "http://"+ window.location.host; //window.location.host => dominio + puerto
const URL = HOST+"/ajax/";
const URLPOST = HOST+"/ajax/data"

new Vue({
    el: '#app',
    created: function (){
        this.fetchAll();

    },
    delimiters: ['$¿', '?'],
    data: {
        user : [],
        form: {
            nombre_usuario: "",
            email: "",
            direccion: "",
            num_telf:"",
            img:"",
            n_portal:"",
            deportes_favoritos:"",
            comentarios:"",
        },
        editElements:[],
        message: false
    },
    methods:{
        edit(e){
            const form = document.forms[0].addEventListener('submit', e => e.preventDefault())

            this.setOptions(e.target.parentElement);
            e.target.parentElement.classList.add("edit")
        },
        setOptions(e){
            const button = e.getElementsByTagName("button")
            const input = e.querySelector("input")
            Array.from(button).forEach(item => this.editElements.push(item))
            this.editElements.push(input)
            this.editElementsStatus("none")

            if (this.editElements.length > 4)
                this.editElements.splice(4)

        },
        unsetOptions (e){
            this.editElementsStatus("none")
            const editButton = e.target.querySelector("button")

            e.currentTarget.parentElement.classList.remove("edit")
            this.editElements = []
        },
        saveData (e){
            const datos = new FormData();
            let user = this.user[0];
            datos.append("id",user.id)
            //datos.append("nombre_usuario",(this.getInputData("nombre_usuario") || user.nombre_usuario));
            datos.append("email",(this.getInputData('email') || user.email));
            datos.append("direccion",(this.getInputData('direccion') || user.direccion));
            datos.append("n_portal",(this.getInputData('n_portal') || user.n_portal));
            datos.append("piso",(this.getInputData('piso') || user.piso));
            datos.append("num_telf",(this.getInputData('num_telf') || user.num_telf));
            datos.append("deportes_favoritos",(this.getInputData('deportes_favoritos') || user.deportes_favoritos));
            datos.append("comentarios",(this.getInputData('comentarios') || user.comentarios));
            datos.append("imagen",document.getElementById('imagen').files[0]);


            //user.nombre_usuario = this.getInputData("nombre_usuario") || user.nombre_usuario;
            user.email = this.getInputData('email') || user.email;
            user.direccion = this.getInputData('direccion') || user.direccion;
            user.n_portal = this.getInputData('n_portal') || user.n_portal;
            user.piso = this.getInputData('piso') || user.piso;
            user.num_telf = this.getInputData('num_telf') || user.num_telf;
            user.deportes_favoritos = this.getInputData('deportes_favoritos') || user.deportes_favoritos;
            user.comentarios = this.getInputData('comentarios') || user.comentarios;


            this.enviarDatos(datos)
            if (e.target.parentElement.tagName == "DIV")
                this.unsetOptions(e)
            this.form = {}

        },
        _linkData(){

        },
        enviarDatos(data){
            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            xhr.open('POST', URLPOST);
            xhr.onreadystatechange = function() {
                if (xhr.readyState>3 && xhr.status==200) console.log(JSON.stringify(xhr.responseText));
            };
            // xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.send(data);
            //this.fetchAll();
            this.message = true;
            this.deleteMessage()
        },
        fetchAll(){
            fetch(URL)
                .then(noData => noData.json())
                .then(data => this.user = data["user"])
        },
        /**
         * Funcion que recupera el valor del elemento input
         * @param name => ID del input, solo admite ID
         * @returns: Contenido del input
         */
        getInputData(name){
            return document.getElementById(name).value
        },
        /**
         * Funcion que establece la variable le mensaje a false para que no se vuelva a mostrar
         * hsata la siguiente modificacion
         */
        deleteMessage(){
            const h2 = document.querySelector("#app > h2").getBoundingClientRect().y
            window.scrollTo(h2,0)
            setTimeout(() => {

                this.message = false;
                // document.getElementById('app').removeChild(document.getElementById('message'))
            },2700)
        },
        editElementsStatus(clase){
            this.editElements.forEach(item => item.classList.toggle(clase))
        }
    },
})