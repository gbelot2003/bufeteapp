$(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });
});

/**
 * Cleditor
 */
$("#descripcion").cleditor();

/**
 * Clientes Select2
 */
$('#cliente_id').select2({
    width: '100%',
    placeholder: "Selecione un cliente"
});

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

(function(){

    var tribunal = $("#tribunal_id");

    tribunal.select2({
        width: '100%',
        placeholder: "Selecione un Tribunal",
        allowClear: true,
        language: {
            noResults: FormatNoResults
        },
        ajax: {
            //quietMillis: 10,
            cache: true,
            dataType: 'json',
            type: 'GET',
            url: '/listados/tribunales/',//This asp.net mvc -> use your own URL
            results: function (data) {
                return { results: data };
            }
        },
        formatResult: FormatResult,
        formatNoMatches:FormatNoResults,
        formatSelection: FormatSelection,
        escapeMarkup: function (markup) { return markup; }
    });

})();

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

(function(){
    var juez = $("#juez_id");

    juez.select2({
        width: '100%',
        placeholder: "Selecione el juez responsable",
        allowClear: true,
        language: {
            noResults: FormatJuezNoResults
        },
        ajax: {
            cache: true,
            dataType: 'json',
            type: 'GET',
            url: '/listados/jueces/',//This asp.net mvc -> use your own URL
            results: function (data) {
                return { results: data };
            }
        },
        formatResult: FormatResult,
        formatNoMatches:FormatJuezNoResults,
        formatSelection: FormatSelection,
        escapeMarkup: function (markup) { return markup; }
    });

})();

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

(function(){
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

})();

(function(){
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

})();

/**
 * validacion
 * Tipo_casos -> Contraparte
 *
**/

$(document).ready(function() {

    $('#tipocaso_id').on('change', function(e){
        var num = $('#tipocaso_id option:selected').val();
        console.log(num)
        if(num == 1){
            $('#lcontraparte').text('Demandado(s)');
            $('#contraparte').prop("disabled", false);
            $('#contraparte').attr("name", 'demandados[]');

        }
        else if(num == 2){
            $('#lcontraparte').html('Demanadante(s)');
            $('#contraparte').prop("disabled", false);
            $('#contraparte').attr("name", 'demandantes[]');
        } else {
            $('#lcontraparte').html('N/A');
            $('#contraparte').prop("disabled", true);
        }
    });

    /**
     * habilitar cliente_id
     */
    $('#cliente_id').prop('disabled', true);
    $('#caso-number').keyup(function () {
        $('#cliente_id').prop('disabled', this.value == "" ? true : false);
    });

    /**
     * habilitar tipocaso_id
     */
    $('#tipocaso_id').prop('disabled', true);
    $('#cliente_id').change(function () {
        $('#tipocaso_id').prop('disabled', false);
    });

    /**
     * habiliar tipojuicio
     */
    $('#tipojuicio').prop('disabled', true);
    $('#tipocaso_id').on('change', function () {
        $('#tipojuicio').prop('disabled', false);
    });

    /**
     * habiliar instancia
     */
    $('#instancia').prop('disabled', true);
    $('#tipojuicio').on('change', function () {
        $('#instancia').prop('disabled', false);
    });

    /**
     * habilitar tribunal_id
     */
    $('#tribunal_id').prop('disabled', true);
    $('#instancia').keyup(function () {
        $('#tribunal_id').prop('disabled', this.value == "" ? true : false);
    });

    /**
     * habiliar salas_id
     */
    $('#salas_id').prop('disabled', true);
    $('#tribunal_id').on('change', function () {
        $('#salas_id').prop('disabled', false);
    });

    /**
     * habiliar juez_id
     */
    $('#juez_id').prop('disabled', true);
    $('#salas_id').on('change', function () {
        $('#juez_id').prop('disabled', false);
    });

});

/** Vue **/

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

v = new Vue({
    el: '#create-casos',
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