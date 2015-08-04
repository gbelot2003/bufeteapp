$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[id="csrf-token"]').attr('value')
    }
});

(function(){


    $(document).ready(function(){

        var Collection = Backbone.Collection.extend({
            url: '/dash/dates'
        });
        var collection = new Collection();

        var Model = Backbone.Model.extend({
            urlRoot: '/dash/create/'
        });

        var View = Backbone.View.extend({

            el: "body",

            events: {
                'click a#showCalendarForm': 'showForm',
                'click a#hideCalendarForm': 'hideForm',
                'click #myBoton': 'submitForm'
            },

            showForm: function(e){
                e.preventDefault();
                this.$el.find('#calendarWrapper').removeClass('m12').addClass('m8');
                this.$el.find('#showCalendarForm').hide();
                this.$el.find('#hideCalendarForm').show();
                this.$el.find('#formWrapper').show('slow');
            },

            hideForm: function(e){
                e.preventDefault();
                this.$el.find('#calendarWrapper').removeClass('m8').addClass('m12');
                this.$el.find('#showCalendarForm').show();
                this.$el.find('#hideCalendarForm').hide();
                this.$el.find('#formWrapper').hide();
            },

            submitForm: function (e) {
                e.preventDefault();
                /**
                 * 1. Tomar los valores del formulario.
                 * 2. Hacer ajax post
                 * 3. Render con los valores y limpiar formulario.
                 */

                var model = new Model({
                    'title': $('#inputTitle').val(),
                    'start': $('#inputStartDay').val() + ' ' + $('#inputStartHour').val(),
                    'start_hour': $('#inputStartHour').val(),
                    'allday': $('#inputCheckBox')[0].checked,
                    'end': $('#inputEndDay').val() + ' ' + $('#inputEndHour').val(),
                    'end_hour': $('#inputEndHour').val()
                });

                var calendar = this.$el.find('#calendar')

                calendar.fullCalendar('removeEvents');
                calendar.fullCalendar('refetchEvents');
                calendar.fullCalendar('destroy');
                model.save();

                collection.fetch({
                    success: function(dt) {
                        console.log('SUCE');
                        calendar.fullCalendar({events: dt.toJSON()});
                        console.log(dt.toJSON());
                    }
                });

                calendar.fullCalendar('refetchEvents');
                calendar.fullCalendar('rerenderEvents');
                calendar.fullCalendar('render');

                //this.render();
            },

            initialize: function() {

                this.$el.find('#formWrapper').hide();
                this.$el.find('#hideCalendarForm').hide();
                this.render();
            },

            render: function() {
                var self = this;

                collection.fetch({
                    success: function (res) {

                        self.$el.find('#calendar').fullCalendar({
                            'events': res.toJSON()
                        });

                        console.log('success done')

                        console.log(res.toJSON())
                        //self.$el.find('#calendar').fullCalendar('refetchEvents');
                    }
                });


                return this;
            }

        });

        var view = new View();
    });

})();(function(){


    $(document).ready(function(){

        var Collection = Backbone.Collection.extend({
            url: '/dash/dates'
        });

        var Model = Backbone.Model.extend({
            urlRoot: '/dash/create/'
        });

        var View = Backbone.View.extend({

            el: "body",

            events: {
                'click a#showCalendarForm': 'showForm',
                'click a#hideCalendarForm': 'hideForm',
                'click #myBoton': 'submitForm'
            },

            showForm: function(e){
                e.preventDefault();
                this.$el.find('#calendarWrapper').removeClass('m12').addClass('m8');
                this.$el.find('#showCalendarForm').hide();
                this.$el.find('#hideCalendarForm').show();
                this.$el.find('#formWrapper').show('slow');
            },

            hideForm: function(e){
                e.preventDefault();
                this.$el.find('#calendarWrapper').removeClass('m8').addClass('m12');
                this.$el.find('#showCalendarForm').show();
                this.$el.find('#hideCalendarForm').hide();
                this.$el.find('#formWrapper').hide();
            },

            submitForm: function (e) {
                e.preventDefault();
                /**
                 * 1. Tomar los valores del formulario.
                 * 2. Hacer ajax post
                 * 3. Render con los valores y limpiar formulario.
                 */
                var frm = $(e.currentTarget).parent().parent();



                var model = new Model({
                    'title': $('#inputTitle').val(),
                    'start': $('#inputStartDay').val() + ' ' + $('#inputStartHour').val(),
                    'start_hour': $('#inputStartHour').val(),
                    'allday': $('#inputCheckBox')[0].checked,
                    'end': $('#inputEndDay').val() + ' ' + $('#inputEndHour').val(),
                    'end_hour': $('#inputEndHour').val()
                });

                model.save(null, { success: function(event) {
                    console.log('yeh!')
                }});

                console.log('_________________')
                console.log(this.$el.find('#calendar'));

                this.$el.find('#calendar').fullCalendar('refetchEvents');
            },

            initialize: function() {

                this.$el.find('#formWrapper').hide();
                this.$el.find('#hideCalendarForm').hide();
                this.render();
            },

            render: function() {
                console.log('RENDER')
                var colection = new Collection();
                var self = this;

                colection.fetch({
                    success: function (res) {

                        self.$el.find('#calendar').fullCalendar({
                            'events': res.toJSON()
                        });

                        console.log('success done')
                    }
                });


                return this;
            }

        });

        var view = new View();
    });

})();