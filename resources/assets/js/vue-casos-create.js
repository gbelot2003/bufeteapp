Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

Vue.directive('clientes', {
    bind: function () {
        var vm = this.vm;
        var key = this.expression;
        $(this.el).select2({
            placeholder: 'Seleccionar cliente',
            allowClear: true,
            width: '100%'
        });
        $(this.el).on('change', function(){
            var mid = $('#cliente_id option:selected').val();
            var text = $('#cliente_id option:selected').text();
            vm.$set('cliente_nombre', text);
            vm.$set(key, mid);
        });
    }
});


Vue.directive('jueces', {
    bind: function () {
        var vm = this.vm;
        var key = this.expression;
        $(this.el).select2({
            placeholder: 'Seleccionar el tipo de caso',
            allowClear: false,
            width: '100%'
        });
        $(this.el).on('change', function(){
            var mid = $('#juez_id option:selected').val();
            var text = $('#juez_id option:selected').text();
            vm.$set('jueznombre', text);
            vm.$set(key, mid);
        });
    }
});

Vue.directive('demandado', {
    bind: function () {
        var vm = this.vm;
        var key = this.expression;
        $(this.el).select2({
            placeholder: 'Seleccionar el contacto',
            allowClear: false,
            width: '100%'
        });
        $(this.el).on('change', function(){
            var text = $('#demandado option:selected').text();
            vm.$set('caso.demandado', text);
        });
    }
});

Vue.directive('demandante', {
    bind: function () {
        var vm = this.vm;
        var key = this.expression;
        $(this.el).select2({
            placeholder: 'Seleccionar el contacto',
            allowClear: false,
            width: '100%'
        });
        $(this.el).on('change', function(){
            var text = $('#demandante option:selected').text();
            vm.$set('caso.demandante', text);
        });
    }
});


var div = Vue.extend({
    template: '<option value="{{ value }}">{{ msg }}</option>',
    props: ['msg', 'value']
});

Vue.component('my-component', div);

v = new Vue({
    el: '#create-casos',

    ready:function(){
        this.getJuecesList();
        this.getContactosList();
    },
    data: {
        contactos: {},
        jueces: {},
        show_details: false,
        submitedForm: false,
        unsetConfig: false,
        demandado: false,
        demandante:false,
        cliente_nombre: "",
        newContacto:{
            id: '',
            type: '',
            name: '',
            cargo: '',
            phone: '',
            movil: '',
            email: '',
            notes: ''
        },
        caso: {
            caso: '',
            cliente_id: 0,
            tipocaso_id: 0,
            tipojuicio: '',
            cliente_es: false,
            tribunal: '',
            demandado: '',
            demandante: '',
            juez_id: 0,
            csj: '', /** corte suprema de justicia **/
            ca: '', /** corte de apelaciones **/
            description: ''
        }
    },

    methods: {

        /** Funciones de formulario **/

        getJuecesList: function() {
            this.$http.get('/listados/jueces/').success(function (data) {
                this.$set('jueces', data);
            });
        },


        getContactosList: function() {
            this.$http.get('/listados/contactos-caso/').success(function (data) {
                this.$set('contactos', data);
            });
        },
        /** Modal Jueces **/

        getNewJuez: function(){
            /** warning message **/
            $('#modal1').openModal({
                dismisable: false
            });
        },

        /** Cancel detroy or edit **/
        modalJuzDestroy: function(){
            /** clear info **/
            this.newContacto.id = 0;
            this.newContacto.type = '';
            this.newContacto.name = '';
            this.newContacto.cargo = '';
            this.newContacto.phone = '';
            this.newContacto.movil = '';
            this.newContacto.email = '';
            this.newContacto.notes = '';
        },

        /** enviar juez **/
        submitJuezCreate: function(e){
            e.preventDefault();
            this.newContacto.type = 'Juez';
            $('#modal1').closeModal();
            var contactos = this.newContacto;
            this.$http.post('/contactos/', contactos).success(function (data, status, request) {
                Materialize.toast('El conctacto a sido creado exitosamente!!!', 3000);
            }).error(function(data, status, response){
                Materialize.toast('Hay un error en el envio de esta información!!!', 3000);
                this.modalDestroy();
            });
            this.getJuecesList();
            this.modalJuzDestroy();
        },

        /** Create contactos modal **/
        getNewContacto: function(){
            /** warning message **/
            $('#modal2').openModal({
                dismisable: false
            });
            this.newContacto.type = 'Relacionado a Caso'
        },

        /** enviar juez **/
        submitContactosCreate: function(e){
            e.preventDefault();
            $('#modal2').closeModal();
            var contactos = this.newContacto;
            this.$http.post('/contactos/', contactos).success(function (data, status, request) {
                Materialize.toast('El conctacto a sido creado exitosamente!!!', 3000);
            }).error(function(data, status, response){
                Materialize.toast('Hay un error en el envio de esta información!!!', 3000);
                this.modalDestroy();
            });
            this.getContactosList();
            this.modalJuzDestroy();
        },

        /** configurando campos **/
        setCasosConfig: function(){
            if(this.caso.tipocaso_id == 1){
                this.caso.demandado = '';
                this.caso.demandante = this.cliente_nombre;
                this.show_details = true;
                this.unsetConfig = true;
                this.demandante = true;
                this.demandado = false;
            } else if(this.caso.tipocaso_id == 2){
                this.caso.demandante = '';
                this.caso.demandado = this.cliente_nombre;
                this.show_details = true;
                this.demandado = true;
                this.demandante = false;
                this.unsetConfig = true;
            } else {
                this.unSetCasosConfig;
                this.show_details = false
            }
        },

        unSetCasosConfig: function(){
            this.caso.demandado = "";
            this.demandado = false;
            this.caso.demandante = "";
            this.demandante = false;
            this.show_details = false;
            this.unsetConfig = false;
        },

        getSubmitForm: function(e){
            e.preventDefault();
            this.caso.estado = 'Abierto';
            var caso = this.caso;
            this.$http.post('/casos/', caso).success(function (data, status, request) {
                this.message = 'El caso a sido registrado exitosamente';
            }).error(function(data, status, request){
                this.message = 'Hay un error en el envio de esta información!!!';
            });
            window.location = '/casos/';
        },

        clearForm: function(){
            this.caso.caso = '';
            this.caso.cliente_id = 0;
            this.caso.tipocaso_id = 0;
            this.caso.tipojuicio = '';
            this.caso.cliente_es = false;
            this.caso.trinunal= '';
            this.caso.demandado = '';
            this.caso.demandante = '';
            this.caso.juez_id = 0;
            this.caso.description = '';
            this.caso.estado = '';
        }

    },
    computed: {
        JuezeditError: function(){
            if( ! this.newContacto.name) { return true }
            return false;
        }
    }

});