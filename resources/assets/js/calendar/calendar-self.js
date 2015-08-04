Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

Vue.directive('calendar', {
    bind: function(){
        var vm = this.vm;
        //var methods = vm.$options.methods;

        console.log('init.....');

        $.get('/dash/dates').success(function (data) {

            $(this.el).fullCalendar({
                events: data
            });

            console.log('getDate1.')

        }.bind(this));

        $(this.el).find("#myBoton").on('click', function(e){
            $.get('/dash/dates').success(function (data) {

                $(this.el).fullCalendar({
                    events: data
                });

                console.log('getDate2.')

            }.bind(this));
        }.bind(this));

        console.log('dibe')
    },
    update: function(data) {
        console.log('UPDATE');
        $(this.el).find("#myBoton").trigger('click');
    }
});


var vm = new Vue({
    el: '#dashboard',
    /*ready: function(){
        this.getDate();
    },*/
    data:{
        rows: [],
        newEvent: {
            title: '',
            allday: '',
            start:'',
            start_hour: '',
            end:'',
            end_hour:''
        },
        title: '',
        start_date: '',
        start_hour: '',
        end_date: '',
        end_hour:'',
        allday: false
    },

    methods: {

        getDate: function(){

            this.$http.get('/dash/dates').success(function (data) {

                /*$(this._directives[0].el).fullCalendar({
                    events: data
                });*/

                console.log(this)
                this._directives[0].update();
                console.log('getDate.3')

            }.bind(this));
        },

        setNewEvent: function(){
            this.newEvent.title = this.title;
            this.newEvent.allday = this.allday;
            this.newEvent.start = this.start_date + " " + this.start_hour;
            this.newEvent.start_hour = this.start_hour;
            this.newEvent.end = this.end_date + " " + this.end_hour;
            this.newEvent.end_hour = this.end_hour;
        },

        submitEvent: function(e){

            e.preventDefault();

            this.setNewEvent();

            var event = this.newEvent;

            this.$http.post('/dash/create', event).success(function(data, status, request) {

                //this.getDate();
                this._directives[0].update();

                Materialize.toast('Evento enviado!', 2000); // 2000 is the duration of the toast

            }).error(function(data, status, request){

                Materialize.toast('Algo salio mal!', 2000) // 2000 is the duration of the toast

            });
        }
    }
})

