let calendario = (function(){
  const HOST = "http://"+ window.location.host; //window.location.host => dominio + puerto
  const AJAX = "/ajax/";
  const USER_ACTIVITY = HOST+AJAX+'getUserActivity';
  const PROFESOR_ACTIVITY = HOST+AJAX+'getProfesorActivity';
  const init = function(){
  const NOW = new Date()
  const ROL = window.location.pathname;
  let dataProfesor={};
  // http://127.0.0.1:8000http://127.0.0.1:8000/ajax/getUserActivity
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
    },
    
    created: function(){ 
      if (ROL == "/usuario") {
        this.userActivity();  
      }else if(ROL == "/profesor"){
        this.profesorActivity(); 
           }
        } ,
       
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
        if (
          this.inst_date.getMonth() === NOW.getMonth() &&
          this.inst_date.getFullYear() === NOW.getFullYear()
        ) {
          return NOW.getDate()
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
          /*
          Array.from(
            { length: this._qtyDaysPrevMonth },
            (v, k) => this._lastDateOfPrevMonth - k
          ).reverse()
          */
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
  
        //console.log(arrObjetos);
      },
      setDate(day) {
       
        this.clickedDay = day

        const fixDay = day < 10 ? '0' + day : day
        const fixMonth =
          this.currMonth + 1 < 10
            ? '0' + (this.currMonth + 1)
            : this.currMonth + 1

        this.output.str = `${day} ${this.months[this.currMonth]} ${this.currYear}`
        this.output.format = `${fixDay}-${fixMonth}-${this.currYear}`
        // const actividad = this.dataProfesor.activity
        // // actividad.forEach(element=>{
        // //   let diaClase = element.fecha.substrin(5,6)
        // //   if(diaClase == day){
        // //     nombre = element.nombre
        // //     this.output.nombre = `${nombre}`
        // //   }
        // // })
        // console.log(actividad)

        this.$emit('setdate', this.output)
      },
     

      userActivity(){
        fetch(USER_ACTIVITY).then( res => res.json() )
                .then(data => {
                  console.log(data);
                })
      }, 
      profesorActivity(){
        fetch(PROFESOR_ACTIVITY).then( res => res.json() )
                .then(data => {
                  console.log(data);
                  dataProfesor = data;
                })

      }
    }, 

  });
}
  return { init };
})();