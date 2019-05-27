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
            img:""
        },
        editElements:[],
        message: false
    },
    methods:{
        edit(e){
            const form = document.forms[0].addEventListener('submit', e => e.preventDefault())
            // Hago al contenedor flexible
            // e.target.parentNode.classList.add("edit")
            console.log("currentTarget" ,e.currentTarget)
            // e.currentTarget.parentElement.classList.add("edit")
            // if (!e.target.parentElement.classList.contains("edit"))
            //     e.target.parentElement.classList.add("edit")
            // const edit = Array.from(document.getElementsByClassName("edit"))
            //
            // // Ahora para la "ejecucion", pero sigue eliminando los valores
            // if (edit.length > 1){
            //     alert("Ya estas editando otro eleme  nto, cierralo para poder continuar.")
            //     return
            // }
            // console.log(edit)
            this.setOptions(e);
        },
        setOptions(e){
            const currentButton = e.currentTarget;
            // const divContainer = document.querySelector('.edit');
            const divContainer = e.currentTarget.parentElement
            divContainer.classList.add("edit")
            const input = divContainer.querySelector('input')
            const cancelButton = divContainer.getElementsByTagName('button')[1]
            const okButton= divContainer.getElementsByTagName('button')[2]
            this.editElements.push(input, cancelButton, okButton)
            currentButton.classList.add('none')
            this.editElements.forEach(v => v.classList.remove('none'))

        },
        unsetOptions (e){
            this.editElements.forEach(v => v.classList.add('none'))
            const divContainer = e.currentTarget.parentElement
            divContainer.classList.remove("edit")
            const editButton = divContainer.getElementsByTagName('button')[0]
            editButton.classList.remove('none')
            console.log("button",editButton.classList)

            this.editElements = [];
            this.form = {}
        },
        saveData (e){
            const datos = new FormData()
            datos.append("id",this.user[0].id)
            datos.append("nombre",(this.getInputData("nombre_usuario") || this.user[0].nombre_usuario))
            datos.append("email",(this.getInputData('email') || this.user[0].email))
            datos.append("direccion",(this.getInputData('direccion') || this.user[0].direccion))
            datos.append("n_portal",(this.getInputData('n_portal') || this.user[0].n_portal))
            datos.append("piso",(this.getInputData('piso') || this.user[0].piso))
            datos.append("num_telf",(this.getInputData('num_telf') || this.user[0].num_telf))
            datos.append("imagen",document.getElementById('imagen').files[0])
            this.enviarDatos(datos)
            this.unsetOptions(e)
            this.form = {}

        },
        enviarDatos(data){
            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            xhr.open('POST', URLPOST);
            xhr.onreadystatechange = function() {
                if (xhr.readyState>3 && xhr.status==200) console.log(JSON.stringify(xhr.responseText));
            };
            // xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.send(data);
            this.fetchAll();
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
        }
    },
})