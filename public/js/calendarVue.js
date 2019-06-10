let calendario = (function(){
  
  const init = function(){

    const HOST = "http://"+ window.location.host; //window.location.host => dominio + puerto
    const AJAX = "/ajax/";
    const USER_ACTIVITY = HOST+AJAX+'getUserActivity';
    const PROFESOR_ACTIVITY = HOST+AJAX+'getProfesorActivity';
    const NOW = new Date();
    const ROL = window.location.pathname;
    let CONTENEDOR = {};
    let ACTIVITY = {};

    function runCalendar(){
      const vm = new Vue({
      el: "#app",
      delimiters: ['$¿', '?'],
      data() {
        return {
          inst_date: NOW,
          days: ['L', 'M', 'X', 'J', 'V', 'S', 'D'],
          months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
          clickedDay: null,
          output: {
            str: '', //19 Апр 2018
            format: '' //2018-04-19
          }
        }
      }
        ,
         
      computed: {
        
        currYear() {

          return this.inst_date.getFullYear()
        },
        currMonth() {
          return this.inst_date.getMonth()
        },
        currWD() {
          return this.inst_date.getDay()
        },
        currDay() {
          console.log(ACTIVITY);
          if (
            this.inst_date.getMonth() === NOW.getMonth() &&
            this.inst_date.getFullYear() === NOW.getFullYear()
          ) {
            return NOW.getDate();
          }
        },
        daysInMonth() {          
          return new Date(this.currYear, this.currMonth + 1, 0).getDate()
        },
        _lastDateOfPrevMonth() {
          return new Date(this.currYear, this.currMonth, 0).getDate()
        },
        _qtyDaysPrevMonth() {
          return new Date(this.currYear, this.currMonth, 0).getDay()
        },
        daysOfPrevMonth() {
          return (
            this._qtyDaysPrevMonth &&
            Array.from(
              { length: this._qtyDaysPrevMonth },
              (v, k) => this._lastDateOfPrevMonth - this._qtyDaysPrevMonth + (k + 1)
            )
          )
        },
        qtyDaysNextMonth() {
          return 42 - (this.daysInMonth + this._qtyDaysPrevMonth)
        },
       
      },
      methods: {
        ltMonth() {
          this.clickedDay = null
          // this.clickedDay && this.reset()
          this.inst_date = new Date(this.currYear, this.currMonth - 1)
        },
        gtMonth() {
          this.clickedDay = null
          // this.clickedDay && this.reset()
          this.inst_date = new Date(this.currYear, this.currMonth + 1)
        },
        reset() {
          this.clickedDay = null
          // this.output.str = ''
          this.$emit('setdate', null)
        },
        setDate(day) {
          this.clickedDay = day;
          console.log("setDate");
          this.checkActivity(this.formatDay(day));
          
          //this.$emit('setdate', this.output)
        },
        formatDay(day){
          const fixDay = day < 10 ? '0' + day : day;
          const fixMonth =
            this.currMonth + 1 < 10
              ? '0' + (this.currMonth + 1)
              : this.currMonth + 1;
          
          return `${this.currYear}-${fixMonth}-${fixDay}`;
        },
        
        checkActivity(fecha){
          this.hiddenActivities();
          ACTIVITY.forEach( v => {
            if (v.fecha == fecha) {
              this.showActivities(v);
            }
          });
          let div = document.getElementById("activities");
          if (!div.childNodes.length) {
            document.getElementById("sinActividades").style.display = 'inherit';
          }else{
            document.getElementById("sinActividades").style.display = 'none';
          }
        },

        matchDay(fecha){
          let dia = this.formatDay(fecha);
          return ACTIVITY.some( v => {
            return v.fecha == dia;
          });
        },

        checkDay(fecha){
           const fixDay = fecha < 10 ? '0' + fecha : fecha;
          const fixMonth =
            this.currMonth + 1 < 10
              ? '0' + (this.currMonth + 1)
              : this.currMonth + 1;
          let format = `${this.currYear}-${fixMonth}-${fixDay}`;
         

        },

        hiddenActivities(){
          if (ROL == "/usuario") {
            let div = document.getElementById("activities");
          
          while(div.childNodes.length){
            div.removeChild(div.childNodes[0]);
          }
          
            
            
          }else if(ROL == "/profesor"){
            
            let div = document.getElementById("activities");
          
            while(div.childNodes.length){
              div.removeChild(div.childNodes[0]);
            }
          } 
        }, 

        showActivities(activity){
          if (ROL == "/usuario") {
            let div = document.createElement("div");
            div.setAttribute("id", "actividad");
            let keys = Object.keys(activity);
            keys.forEach(v =>{
              let p = document.createElement("p");

              let spanTitle = document.createElement("span");
              let spanContent = document.createElement("span");
              let txtTitle = null;
              if (v == 'titulo') {
                txtTitle = document.createTextNode('');
              }else{
                txtTitle = document.createTextNode(v[0].toUpperCase()+v.slice(1)+': ');
              }
              let txtContent = null;
              if (v == 'instalacion') {
                txtContent = document.createTextNode(activity[v][0].toUpperCase() + activity[v].slice(1).toLowerCase());
                console.log(txtContent);
              }else{
                txtContent = document.createTextNode(activity[v]);
              }
              

              spanTitle.appendChild(txtTitle);
              spanContent.appendChild(txtContent);
              p.appendChild(spanTitle);
              p.appendChild(spanContent);
              div.appendChild(p);
              if (v == 'titulo') {
                div.appendChild(document.createElement("hr"));
              }
            });

            document.getElementById("activities").appendChild(div);
          }else if(ROL == "/profesor"){
            let div = document.createElement("div");
            div.setAttribute("id", "actividad");
            let keys = Object.keys(activity);
            keys.forEach(v =>{
              let p = document.createElement("p");

              let spanTitle = document.createElement("span");
              let spanContent = document.createElement("span");
              let txtTitle = null;
              if (v == 'titulo') {
                txtTitle = document.createTextNode('');
              }else{
                txtTitle = document.createTextNode(v[0].toUpperCase()+v.slice(1)+': ');
              }
              let txtContent = null;
              if (v == 'instalacion') {
                txtContent = document.createTextNode(activity[v][0].toUpperCase() + activity[v].slice(1).toLowerCase());
                console.log(txtContent);
              }else{
                txtContent = document.createTextNode(activity[v]);
              }
              

              spanTitle.appendChild(txtTitle);
              spanContent.appendChild(txtContent);
              p.appendChild(spanTitle);
              p.appendChild(spanContent);
              div.appendChild(p);
              if (v == 'titulo') {
                div.appendChild(document.createElement("hr"));
              }
            });

            document.getElementById("activities").appendChild(div);
          } 
        },
        pintarIconoClase(){
        let clases = document.querySelectorAll("td[data-clase]");
          let fechas  = document.querySelectorAll("td[data-fecha]");
        let arrObjetos= [];
       
        for (let i = 0; i < clases.length ;i++) {
          ob= {};
          let nombre =  clases[i].innerText;
          let dia = fechas[i].innerText;
          dia = dia.substring(0, 2);
          if(dia[0]==0){
            
            dia = parseInt(dia);
          }
          ob.nombre = nombre;
          ob.dia = dia;
          arrObjetos.push(ob);
          
        }
  
        let days = document.querySelectorAll('.nico');
        for ( i = 0; i < days.length ;i++) {
           let span = days[i].firstChild;
    
           arrObjetos.forEach(element => {
            if(span.innerText == element.dia){
              //days[i].style = "background-color:red";
              days[i].classList.add('clase');
            }
          });
         
        }

},
      },
    });
    }

    function userActivity(){
      fetch(USER_ACTIVITY).then( res => res.json() )
        .then(data => {
          ACTIVITY = data.activity;
          runCalendar();
        })
    } 
    
    function profesorActivity(){
      fetch(PROFESOR_ACTIVITY).then( res => res.json() )
        .then(data => {
          ACTIVITY = data.activity;
          console.log(ACTIVITY);
          runCalendar();
        })
    }

    console.log(ROL);
    if (ROL == "/usuario") {
      userActivity();  
    }else if(ROL == "/profesor"){
      profesorActivity();  
    } 
  }
    
    return { init };
})();
