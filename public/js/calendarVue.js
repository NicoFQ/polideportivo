let calendario = (function(){
  const init = function(){


  const NOW = new Date()

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
        // !TODO wtf
        if (
          this.inst_date.getMonth() === NOW.getMonth() &&
          this.inst_date.getFullYear() === NOW.getFullYear()
        ) {
          return NOW.getDate()
        }
      },
      daysInMonth() {
        console.log(new Date(this.currYear, this.currMonth + 1, 0).getDate());
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
      }
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
        this.clickedDay = day

        const fixDay = day < 10 ? '0' + day : day
        const fixMonth =
          this.currMonth + 1 < 10
            ? '0' + (this.currMonth + 1)
            : this.currMonth + 1

        this.output.str = `${day} ${this.months[this.currMonth]} ${this.currYear}`
        this.output.format = `${this.currYear}-${fixMonth}-${fixDay}`

        this.$emit('setdate', this.output)
      }
    }
  });
  }
  return { init };
})();