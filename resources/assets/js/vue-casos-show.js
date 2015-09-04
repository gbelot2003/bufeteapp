Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

/**
 * Cleditor
 */

$(document).ready(function() {
    $("#descripcion").cleditor();
    $('select').material_select();
});

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});

v = new Vue({
    el: '#show-casos',

    data: {
        formCreate: false,
        newDatos:{
            caso_id: 0,
            date: '',
            importancia: '',
            descripcion: ''
        },
        caso_id: 0,
        rows: [],
        datos:{
            id: 0,
            caso_id: 0,
            date: '',
            importancia: '',
            descripcion: ''
        },
        show:{
            id: 0,
            caso_id: 0,
            date: '',
            importancia: '',
            descripcion: '',
            users: ''
        }
    },

    beforeCompile:function(){
        console.log('almost');
    },

    ready:function(){
        this.getData(this.caso_id);
        this.setShowFirstData(this.caso_id);
    },
    methods: {
        getData: function(id){
            this.$http.get('/listados/relacionados/' + id).success(function(data){
                this.$set('rows', data);
            });
        },

        editForm: function(row){
            this.datos.title = row.title;
            this.datos.date = row.date;
            this.datos.body = row.body;
            $('#modal3').openModal();
        },

        newDatos: function(){
            $('#modal3').openModal();
        },

        setReadTime: function(row){
            return moment(row).format('dddd DD MMMM YYYY');
        },

        setShowData: function(row){
            this.show.id = row.id;
            this.show.caso_id = row.caso_id;
            this.show.date = row.date;
            this.show.importancia = row.importancia;
            this.show.descripcion = row.descripcion;
            this.show.users = row.users;
        },

        setShowFirstData:function(id){
            this.$http.get('/listados/relacionados-active/' + id).success(function(data){
                this.$set('show', data);
            });
        },

        getCloseCreate: function(){
            this.newDatos.caso_id = 0;
            this.newDatos.date = '';
            this.newDatos.importancia = 0;
            this.newDatos.descripcion = '';
            $('#modal1').closeModal();
        },

        openCreate: function() {
          this.formCreate = true;
        },

        closeCreate: function (){
            this.formCreate = false;
        }
    }
});