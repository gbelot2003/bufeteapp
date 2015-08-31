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
**/

$('#tipocaso_id').on('change', function(e){
    var num = $('#tipocaso_id option:selected').val();
    console.log(num)
    if(num == 1){
        $('#lcontraparte').text('Demandado(s)');
        $('#contraparte').prop("disabled", false);
    }
    else if(num == 2){
        $('#lcontraparte').html('Demanadante(s)');
        $('#contraparte').prop("disabled", false);
    } else {
        $('#lcontraparte').html('N/A');
        $('#contraparte').prop("disabled", true);
    }
});