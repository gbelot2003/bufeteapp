Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

Vue.component('calendar', {
    template: '<div id="calendar"></div>'
});

Vue.directive('start',{
    bind: function () {
        var endDateTextBox = $('#end');
        var startDateTextBox = $('#start');
        var vm = this.vm;
        this.el.options = vm.start;

        $(this.el).datetimepicker({
            timeFormat: 'HH:mm:00',
            dateFormat: 'yy-m-d',
            onClose: function(dateText, inst) {
                if (endDateTextBox.val() != '') {
                    var testStartDate = startDateTextBox.datetimepicker('getDate');
                    var testEndDate = endDateTextBox.datetimepicker('getDate');
                    if (testStartDate > testEndDate)
                        endDateTextBox.datetimepicker('setDate', testStartDate);
                }
                else {
                    endDateTextBox.val(dateText);
                }
            },
            onSelect: function (selectedDateTime){
                endDateTextBox.datetimepicker('option', 'minDate', startDateTextBox.datetimepicker('getDate') );
            }
        })
        .change( function(){
                vm.start = this.el.value;
            }.bind(this)
        );
    }
});

Vue.directive('end',{
    bind: function () {
        var endDateTextBox = $('#end');
        var startDateTextBox = $('#start');
        var vm = this.vm;
        this.el.options = vm.end;

        $(this.el).datetimepicker({
            timeFormat: 'HH:mm:00',
            dateFormat: 'yy-m-d',
            onClose: function(dateText, inst) {
                if (startDateTextBox.val() != '') {
                    var testStartDate = startDateTextBox.datetimepicker('getDate');
                    var testEndDate = endDateTextBox.datetimepicker('getDate');
                    if (testStartDate > testEndDate)
                        startDateTextBox.datetimepicker('setDate', testEndDate);
                }
                else {
                    startDateTextBox.val(dateText);
                }
            },
            onSelect: function (selectedDateTime){
                startDateTextBox.datetimepicker('option', 'maxDate', endDateTextBox.datetimepicker('getDate') );
            }
        })
            .change( function(){
                vm.end = this.el.value;
            }.bind(this)
        );
    }
});


var vm = new Vue({
    el: '#dashboard',
    ready: function(){
        this.calendarInit();
    },
    data:{
        rows: [],
        newEvent: {},
        showEvents: {},
        editEvent: {
            id: 0,
            title: '',
            start: '',
            end:'',
            details: '',
            allday: false
        },
        id: 0,
        title: '',
        start: '',
        end:'',
        details: '',
        allday: false
    },

    methods: {

        calendarInit: function(){

            $('#calendar').fullCalendar({
                lang: 'es',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },

                editable: true,

                eventDrop: function(event, delta, revertFunc) {

                    alert(event.title + " was dropped on " + event.start.format());

                    if (!confirm("Are you sure about this change?")) {
                        revertFunc();
                    }

                },

                eventLimit: false, // allow "more" link when too many events

                defaultView: 'month',

                eventSources: [
                    {
                        url: '/listados/dates/', // use the `url` property
                        cache: true
                    }
                ],

                eventClick: function(calEvent, jsEvent, view) {
                    
                   vm.$set('showEvents', calEvent);

                   $('#modal2').openModal({
                       dismissible: false
                   });

                   // $(this).css('border-color', 'red');
                }

            });
        },

        calendarReload: function(){
            $('#calendar').fullCalendar('refetchEvents');
        },

        setShowEvent: function(event){
            this.showEvents = event;
        },

        setEditModal: function(){
            this.editEvent = this.showEvents;
          $('#modal2').closeModal();
          $('#modal3').openModal();
        },

        setNewEvent: function(){
            this.newEvent.title = this.title;
            this.newEvent.allday = this.allday;
            this.newEvent.start = this.start;
            this.newEvent.end = this.end;
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
        },

        submitEditEvent: function(e){
            e.preventDefault();
            this.setNewEvent();
            var event = this.editEvent;
            $("#modal3").closeModal();
        }
    },
    computed: {
        initTime: function () {
            return moment(this.showEvents.start).format('dddd DD MMMM YYYY, HH:MM');
        },

        endTime: function(){
            return moment(this.showEvents.end).format('dddd DD MMMM YYYY, HH:MM');
        }
    }

});

