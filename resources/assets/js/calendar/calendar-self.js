Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

Vue.component('calendar', {
    template: '<div id="calendar"></div>'
});

var vm = new Vue({
    el: '#dashboard',
    ready: function(){
        this.calendarInit();
    },
    data:{
        rows: [],
        newEvent: {},
        editEvent: {
            id: 0,
            title: '',
            start_date: '',
            start_hour: '',
            end_date: '',
            end_hour:'',
            details: '',
            allday: false
        },
        id: 0,
        title: '',
        start_date: '',
        start_hour: '',
        end_date: '',
        end_hour:'',
        details: '',
        allday: false
    },

    methods: {

        calendarInit: function(){
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultView: 'agendaWeek',
                //editable: true,
                eventSources: [
                    {
                        url: '/listados/dates/', // use the `url` property
                        cache: true
                    }
                ],

                eventClick: function(calEvent, jsEvent, view) {

                   //var evento = calEvent.title;
                   //Materialize.toast(evento, 3000); // 2000 is the duration of the toast
                   vm.$set('editEvent', calEvent);

                   $('#modal2').openModal({
                       dismissible: false
                   });

                   // change the border color just for fun
                   $(this).css('border-color', 'red');

                }

            });
        },

        calendarReload: function(){
            $('#calendar').fullCalendar('refetchEvents');
        },

        setEditEvent: function(event){
            this.editEvent = event;
        },

        setNewEvent: function(){
            this.newEvent.title = this.title;
            this.newEvent.allday = this.allday;
            this.newEvent.start = this.start_date + " " + this.start_hour;
            this.newEvent.start_date = this.start_date;
            this.newEvent.start_hour = this.start_hour;
            this.newEvent.end = this.end_date + " " + this.end_hour;
            this.newEvent.end_date = this.end_date;
            this.newEvent.end_hour = this.end_hour;
            this.newEvent.details = this.details;
        },

        unsetNewEvent: function(){
            this.newEvent = {}
        },

        submitEvent: function(e){

            e.preventDefault();

            this.setNewEvent();

            var event = this.newEvent;

            this.$http.post('/dash/create', event).success(function(data, status, request) {

                Materialize.toast('Evento enviado!', 2000); // 2000 is the duration of the toast
                this.calendarReload();
                this.unsetNewEvent();
                $("#modal1").closeModal();

            }).error(function(data, status, request){

                Materialize.toast('Algo salio mal!', 2000) // 2000 is the duration of the toast
            });

        }
    }
})

