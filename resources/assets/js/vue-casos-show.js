Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});

v = new Vue({
    el: '#show-casos',
    data: {
        caso_id: 0,
        rows: [],
        datos:{
            id: 0,
            caso_id: 0,
            title: '',
            date: '',
            body: ''
        },

        newDatos:{
            caso_id: 0,
            title: '',
            date: '',
            body: ''
        },
        datosTitle: ''
    },
    ready:function(){
        this.getData(this.caso_id);
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
        }


    }
});