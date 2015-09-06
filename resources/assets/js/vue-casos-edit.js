(function(){

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
     * Clientes Select2
     */
    $('#cliente_id').select2({
        width: '100%'
    });



})();