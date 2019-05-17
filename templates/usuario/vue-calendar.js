const days = [
	"Sunday",
	"Monday",
	"Tuesday",
	"Wednesday",
	"Thursday",
	"Friday",
	"Saturday"
];
const months = [
	"January",
	"February",
	"March",
	"April",
	"May",
	"June",
	"July",
	"August",
	"September",
	"October",
	"November",
	"December"
];

const appointments = [
	{
		date: "Tue Feb 16 2019",
		time: "11:00",
		duration: "125 minutes",
		treatments: "60 Minute Massage",
		price: 5000,
		client: "Forbes Gray"
	},
	{
		date: "Tue Nov 19 2018",
		time: "11:00",
		duration: "105 minutes",
		treatments: "60 Minute Massage, Eyebrow Wax",
		price: 9900,
		client: "Client A"
	},
	{
		date: "Tue Nov 20 2018",
		time: "15:00",
		duration: "60 minutes",
		treatments: "Full Leg Wax",
		price: 7000,
		client: "Client A"
	},
	{
		date: "Wed Oct 21 2018",
		time: "12:00",
		duration: "105 minutes",
		treatments: "60 Minute Facial, Eyelash Tint",
		price: 6000,
		client: "Jane Doe"
	},
	{
		date: "Wed Dec 20 2018",
		time: "15:00",
		duration: "100 minutes",
		treatments: "90 Minute Swedish Massage",
		price: 8000,
		client: "Some Person"
	},
	{
		date: "Wed Dec 22 2018",
		time: "10:00",
		duration: "60 minutes",
		treatments: "30 Minute Swedish Massage, Full Leg Wax",
		price: 6000,
		client: "Some Person"
	}
];

const Modal = Vue.component("Modal", {
	name: "modal",
	props: {
		event: {
			type: Object,
			required: true
		},
		handleModalToggle: {
			type: Function,
			required: true
		}
	},
	template: `
		<div class="fg-modal">
			<div class="modal-body">
				<i class="close fa fa-times"></i>
				<h4>{{event.client}}</h4>
				<p>Date: {{event.date}}</p>
				<p>Time: {{event.time}}</p>
				<p>Duration: {{event.duration}}</p>
				<p>{{event.treatments}}</p>
				<p>Price: £{{(event.price / 100).toFixed(2)}}</p>
			</div>
		</div>		
	`
});

const Event = Vue.component("Event", {
	name: "event",
	data() {
		return {
			showDetails: false
		};
	},
	props: {
		event: {
			type: Object,
			required: true
		}
	},
	template: `
		<div class="event" @click.stop="handleModalToggle">
			<i class="fa fa-calendar fa-fw" aria-hidden="true"></i>
			<span>{{event.time}}</span>
			<transition name="modal-fade">
				<Modal v-if="showDetails" :event="event" :handleModalToggle="handleModalToggle" />
			</transition>
		</div>
	`,
	methods: {
		handleModalToggle() {
			this.showDetails = !this.showDetails;
		}
	},
	components: {
		Modal
	}
});

const Day = Vue.component("Day", {
	name: "Day",
	data() {
		return {
			height: 100,
			showDetails: false
		};
	},
	props: {
		day: {
			type: Object
		},
		handleDayView: {
			type: Function,
			required: true
		}
	},
	mounted() {
		this.height = this.$el.clientWidth;
	},
	components: { Event },
	template: `
		<div class="day noselect" :class="{'active': day.active}" :style="{height: height + 'px'}">
			<header @click="() => {handleDayView(day)}">
				<span class="day-name">{{day.name}}</span> {{day.date ? day.date.getDate() : null}}
			</header>
			<section>
				<Event v-for="appointment in day.appointments" :event="appointment"/>
			</section>
		</div>
	`
});

const Calendar = Vue.component("Calendar", {
	name: "Calendar",
	data() {
		return {
			date: new Date()
		};
	},
	props: {
		handleDayView: {
			type: Function,
			required: true
		}
	},
	computed: {
		appointments() {
			// Find Appointments falling in current month and sort them by time
			return appointments
				.reduce((prev, appointment) => {
					const apptDate = new Date(appointment.date);
					const monthStartDate = new Date(
						this.date.getFullYear(),
						this.date.getMonth(),
						1
					);
					const monthEndDate = new Date(
						this.date.getFullYear(),
						this.date.getMonth() + 1,
						1
					);
					if (apptDate >= monthStartDate && apptDate <= monthEndDate) {
						prev.push(appointment);
					}
					return prev;
				}, [])
				.sort((a, b) => {
					if (a.time > b.time) return 1;
					if (a.time < b.time) return -1;
					return 0;
				});
		},
		dateObject() {
			return {
				date: this.date,
				day: days[this.date.getDay()],
				month: months[this.date.getMonth()],
				year: this.date.getFullYear()
			};
		},
		daysInMonth() {
			let date = new Date(this.date.getFullYear(), this.date.getMonth() + 1, 0);
			return date.getDate();
		},
		buildCalendarDays() {
			let daysArray = [];
			let week = 0;
			const firstMonthDate = new Date(
				this.date.getFullYear(),
				this.date.getMonth(),
				1
			);
			const firstMonthDay = days[firstMonthDate.getDay()];
			let monthDate = 0;
			while (week < 6) {
				days.forEach(day => daysArray.push(day));
				week += 1;
			}
			return daysArray.map(day => {
				let dayObj = {
					name: day,
					active: false
				};
				if (!monthDate && firstMonthDay === day) {
					monthDate += 1;
					const date = new Date(
						this.date.getFullYear(),
						this.date.getMonth(),
						monthDate
					);
					dayObj.date = date;
					dayObj.active = true;
					dayObj.appointments = this.appointments.reduce((prev, appt) => {
						if (new Date(appt.date).getTime() === date.getTime()) {
							prev.push(appt);
						}
						return prev;
					}, []);
				} else if (monthDate && monthDate < this.daysInMonth) {
					monthDate += 1;
					const date = new Date(
						this.date.getFullYear(),
						this.date.getMonth(),
						monthDate
					);
					dayObj.date = date;
					dayObj.active = true;
					dayObj.appointments = this.appointments.reduce((prev, appt) => {
						if (new Date(appt.date).getTime() === date.getTime()) {
							prev.push(appt);
						}
						return prev;
					}, []);
				}
				return dayObj;
			});
		}
	},
	methods: {
		handleChangeMonth(change) {
			let newDate = new Date(
				this.date.getFullYear(),
				this.date.getMonth() + change
			);
			this.date = newDate;
		}
	},
	created() {
		window.scrollTo(0, 0);
	},
	template: `
		<div class="calendar-container noselect">
			<header>
				<div class="navigation-arrow">
					<i class="fa fa-chevron-left" @click="() => {handleChangeMonth(-1)}"></i>
				</div>
				<div class="">
					<h4>{{dateObject.month}}</h4>
					<p>{{dateObject.year}}</p>
				</div>
				<div class="navigation-arrow">
					<i class="fa fa-chevron-right" @click="() => {handleChangeMonth(1)}"></i>
				</div>
			</header>
			<div class="days">
				<Day v-for="(day, index) in this.buildCalendarDays" :handleDayView="handleDayView" :day="day" :key="index" />
			</div>
		</div>
	`,
	components: { Day }
});

const DayViewAppointment = Vue.component("DayViewAppointment", {
	name: "DayViewAppointment",
	props: {
		appointment: {
			type: Object,
			required: true
		}
	},
	computed: {
		height() {
			// Should recieve a String containing the number of minutes
			// return duration in milliseconds
			return parseInt(this.appointment.duration.split(" ")[0], 10);
		},
		price() {
			return `£${(this.appointment.price / 100).toFixed(2)}`;
		},
		startTime() {
			let date = new Date(this.appointment.date);
			let time = this.appointment.time.split(":");
			let appointmentTimestamp = new Date(
				date.getFullYear(),
				date.getMonth(),
				date.getDate(),
				time[0],
				time[1]
			);
			return appointmentTimestamp;
		},
		endTime() {
			let duration =
				parseInt(this.appointment.duration.split(" ")[0], 10) * 60 * 1000;
			let endTime = new Date(this.startTime.getTime() + duration);
			return (
				endTime.getHours() +
				":" +
				(endTime.getMinutes() < 10
					? endTime.getMinutes() + "0"
					: endTime.getMinutes())
			);
		}
	},
	template: `
		<div class="appointment" :style="'height: ' + height + 'px;'">
			<header>
			<div class="client">
				<img :src="appointment.photoURL" :alt="appointment.client" />
				<h4>{{appointment.client}}</h4>
			</div>
			<div class="times">
				<p>Start: <b>{{startTime.getHours() + ':' + (startTime.getMinutes() < 10 ? startTime.getMinutes() + '0' : startTime.getMinutes())}}</b></p>
				<p>End: <b>{{endTime}}</b></p>
			</div>
			</header>
			<p>{{appointment.treatments}}</p>
			<p>Duration: {{appointment.duration}}</p>
			<p>Price: {{price}}</p>
		</div>
	`
});

const DayView = Vue.component("DayView", {
	name: "day-view",
	data() {
		return {
			agenda: false
		};
	},
	props: {
		day: {
			type: Object,
			required: true
		},
		handleCloseDayView: {
			type: Function,
			required: true
		},
		handleChangeDay: {
			type: Function,
			reuired: true
		}
	},
	beforeEnter(el) {
		console.log(el);
	},
	computed: {
		hours() {
			let time = new Date(
				this.day.date.getFullYear(),
				this.day.date.getMonth(),
				this.day.date.getDate(),
				8,
				0
			).getTime();
			let endTime = new Date(
				this.day.date.getFullYear(),
				this.day.date.getMonth(),
				this.day.date.getDate(),
				20,
				0
			).getTime();
			const hour = 60 * 60 * 1000;
			let hours = [];
			while (time < endTime) {
				hourObj = {
					time: new Date(time),
					appointments: this.day.appointments.filter(appt => {
						appt = addUserImage(appt);
						let date = new Date(appt.date);
						let timeArray = appt.time.split(":").map(time => parseInt(time));
						let startTime = new Date(
							date.getFullYear(),
							date.getMonth(),
							date.getDate(),
							parseInt(timeArray[0]),
							parseInt(timeArray[1])
						);
						return startTime.getTime() >= time && startTime.getTime() < time + hour;
					})
				};
				hours.push(hourObj);
				time += hour;
			}
			return hours;
		}
	},
	created() {
		window.scrollTo(0, 0);
	},
	template: `
		<div class="day-view">
			<div class="close" @click="handleCloseDayView"><i class="fa fa-times"></i></div>
			<header>
				<div class="navigation-arrow">
					<i class="fa fa-chevron-left" @click="() => {handleChangeDay(-1)}"></i>
				</div>
				<div class="day-title">
					<h5>{{day.name}}</h5>
					<h4>{{day.date.getDate()}}</h4>
					<p>{{months[day.date.getMonth()]}} {{day.date.getFullYear()}}</p>
				</div>
				<div class="navigation-arrow">
					<i class="fa fa-chevron-right" @click="() => {handleChangeDay(1)}"></i>
				</div>
			</header>
			<div>
				<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
				  <li class="nav-item">
					 <a class="nav-link" :class="{'active': !agenda}" href="#day-view" @click.prevent="() => {agenda = !agenda}">Day View</a>
				  </li>
				  <li class="nav-item">
					 <a class="nav-link" :class="{'active': agenda}" href="#agenda" @click.prevent="() => {agenda = !agenda}">Agenda View</a>
				  </li>
				</ul>
			</div>
			<transition name="fade" mode="out-in">
				<div class="hours" key="1" v-if="!agenda">
					<div class="hour" v-for="hour in hours">
						<header>
							<span>{{hour.time.getHours()}}:{{hour.time.getMinutes() < 10 ? hour.time.getMinutes() + '0' : hour.time.getMinutes()}}</span>
						</header>
						<section>
							<day-view-appointment v-for="appointment in hour.appointments" :appointment="appointment"></day-view-appointment>
						</section>
					</div>
				</div>
				<div class="agenda" key="2" v-else>
					<day-view-appointment v-for="appointment in day.appointments" :appointment="appointment"></day-view-appointment>
					<div class="no-appointments" v-if="!day.appointments || day.appointments.length === 0">
						<div><i class="fa fa-exclamation-triangle fa-5x" aria-hidden="true"></i></div>
						<h4>No Appointments Today</h4>
					</div>
				</div>
			</transition>
		</div>
	`
});

const App = Vue.component("App", {
	name: "App",
	data() {
		return {
			day: null
		};
	},
	methods: {
		handleDayView(day) {
			if (!day) return;
			this.day = day;
		},
		handleCloseDayView() {
			this.day = null;
		},
		handleChangeDay(change) {
			// Create a new day object with day change applied
			const date = new Date(
				this.day.date.getFullYear(),
				this.day.date.getMonth(),
				this.day.date.getDate() + change
			);
			let dayObj = Object.assign(this.day, {
				date,
				name: days[date.getDay()],
				appointments: appointments.reduce((prev, appt) => {
					if (new Date(appt.date).getTime() === date.getTime()) {
						prev.push(addUserImage(appt));
					}
					return prev;
				}, [])
			});
			this.day = dayObj;
		}
	},
	template: `
		<div class="app">
			<transition name="fade" mode="out-in">
				<calendar v-if="!day" :handleDayView="handleDayView"></calendar>
				<day-view v-else :day="day" :handleCloseDayView="handleCloseDayView" :handleChangeDay="handleChangeDay"></day-view>
			</transition>
		</div>
	`,
	components: { Calendar }
});

// Helper functions
function addUserImage(appt) {
	// Add random user image
	const randomNumber = Math.round(Math.random() * 88);
	appt.photoURL = `https://randomuser.me/api/portraits/women/${randomNumber}.jpg`;
	return appt;
}

let app = new Vue({
	el: "#app",
	template: "<App />",
	components: { App }
});
