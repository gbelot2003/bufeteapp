$(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });
});

/**
 *
 * @param item
 * @returns {*}
 * @constructor
 */

function FormatSelection(item) {
    return item.name;
}

/**
 *
 * @param item
 * @returns {string}
 * @constructor
 */
function FormatResult(item) {
    var markup = "";
    if (item.name !== undefined) {
        markup += "<option value='" + item.id + "'>" + item.name + "</option>";
    }
    markup += "<a href=''>create</a>"
    return markup;
}


/**
 * OpenModal tribunal
 */
function tribunalModal(){
    $('#modal3').openModal();
}

/**
 * OpenModal Juez_id
 */
function juezModal(){
    $('#modal1').openModal();
}

/**
 * OpenModal Juez_id
 */
function contraparteModal(){
    $('#modal2').openModal();
}


(function(){

    /**
     * Tribunal
     * @param item
     * @returns {string}
     * @constructor
     */
    function FormatNoResults(item){
        var markup = "";
        markup += "<a id='create-tribunal' class='modal-trigger' onclick='return tribunalModal()'>Nuevo registro</a>";
        return markup;
    }

    /**
     * Juez_id
     * @param item
     * @returns {string}
     * @constructor
     */
    function FormatJuezNoResults(item){
        var markup = "";
        markup += "<a id='create-tribunal' class='modal-trigger' onclick='return juezModal()'>Nuevo registro</a>";
        return markup;
    }

    var tribunal = $("#tribunal_id");

    tribunal.select2({
        width: '100%',
        language: {
            noResults: FormatNoResults
        },
        ajax: {
            //quietMillis: 10,
            cache: true,
            dataType: 'json',
            type: 'GET',
            url: '/listados/tribunales/',
            results: function (data) {
                return { results: data };
            }
        },
        formatResult: FormatResult,
        formatNoMatches:FormatNoResults,
        formatSelection: FormatSelection,
        escapeMarkup: function (markup) { return markup; }
    });

    /**
     * juez_id Select2
     * @type {*|jQuery|HTMLElement}
     */
    var juez = $("#juez_id");

    juez.select2({
        width: '100%',
        language: {
            noResults: FormatJuezNoResults
        },
        ajax: {
            cache: true,
            dataType: 'json',
            type: 'GET',
            url: '/listados/jueces/',
            results: function (data) {
                return { results: data };
            }
        },
        formatResult: FormatResult,
        formatNoMatches:FormatJuezNoResults,
        formatSelection: FormatSelection,
        escapeMarkup: function (markup) { return markup; }
    });

    /**
     * Tecerias
     * @type {*|jQuery|HTMLElement}
     */
    var tercerias = $("#tercerias");

    tercerias.select2({
        width: '100%',
        placeholder: "Selecione contacto",
        allowClear: true,
        multiple: true,
        language: {
            noResults: FormatContraparteNoResults
        },
        ajax: {
            cache: true,
            dataType: 'json',
            type: 'GET',
            url: '/listados/contactos-caso/',
            results: function (data) {
                return { results: data };
            }
        },
        formatResult: FormatResult,
        formatNoMatches:FormatContraparteNoResults,
        formatSelection: FormatSelection,
        escapeMarkup: function (markup) { return markup; }
    });
    /**
     * Select2 Contraparte
     */

    /**
     * contraparte
     * @param item
     * @returns {string}
     * @constructor
     */
    function FormatContraparteNoResults(item){
        var markup = "";
        markup += "<a id='create-tribunal' class='modal-trigger' onclick='return contraparteModal()'>Nuevo registro</a>";
        return markup;
    }

    var contraparte = $("#contraparte");

     contraparte.select2({
        width: '100%',
        placeholder: "Selecione contacto",
        allowClear: true,
        multiple: true,
        language: {
            noResults: FormatContraparteNoResults
        },
        ajax: {
            cache: true,
            dataType: 'json',
            type: 'GET',
            url: '/listados/contactos-caso/',
                results: function (data) {
                    return { results: data };
                }
            },
         formatResult: FormatResult,
         formatNoMatches:FormatContraparteNoResults,
         formatSelection: FormatSelection,
         escapeMarkup: function (markup) { return markup; }



     });



    /**
     * Clientes Select2
     */
    $('#cliente_id').select2({
        width: '100%'
    });

})();

/** Vue **/

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

v = new Vue({
    el: '#edit-casos',
    data:{
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
        newTribunal: {
            name:''
        }
    },

    methods:{
        /** cancelar contacto o juez **/
        modalJuezDestroy: function(){
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
            });

            this.modalJuezDestroy();
        },

        /** destruir contacto **/
        modalContactDestroy: function(){
            this.newContacto = {};
        },

        /** enviar Contacto **/
        submitContactosCreate: function(e){
            e.preventDefault();
            this.newContacto.type = 'Relacionado a Caso';
            $('#modal2').closeModal();
            var contactos = this.newContacto;
            this.$http.post('/contactos/', contactos).success(function (data, status, request) {
                Materialize.toast('El conctacto a sido creado exitosamente!!!', 3000);
            }).error(function(data, status, response){
                Materialize.toast('Hay un error en el envio de esta información!!!', 3000);
            });
            this.modalContactDestroy();
        },

        /** Cancel create or edit **/
        modalTribunalDestroy: function(){
            this.newTribunal.name = '';
        },

        /** enviar Tribunal **/
        submitTribunalCreate: function(e){
            e.preventDefault();
            var tribunal = this.newTribunal;
            this.$http.post('/tribunal', tribunal).success(function (data, status, request) {
                Materialize.toast('El Tribunal a sido agregado exitosamente!!!', 3000);
            }).error(function(data, status, response){
                Materialize.toast('Hay un error en el envio de esta información!!!', 3000);
            });
            $('#modal3').closeModal();
            this.modalTribunalDestroy();
        }

    },

    computed: {
        JuezeditError: function(){
            if( ! this.newContacto.name) { return true }
            return false;
        }
    }
});