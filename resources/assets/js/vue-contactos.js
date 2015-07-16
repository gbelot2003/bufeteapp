Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

v = new Vue({
    el: '#contactos',
    ready: function(){
        this.getContactos(1);
    },
    data:{
        contactos:{
            id: '',
            type: '',
            name: '',
            cargo: '',
            phone: '',
            movil: '',
            email: '',
            notes: ''
        },
        rows:[],
        newContacto:{
            type: '',
            name: '',
            cargo: '',
            phone: '',
            movil: '',
            email: '',
            notes: ''
        },
        contactoName:[],
        searchKey: '',
        currentPage: 0,
        itemsPerPage: 0,
        resultCount: 0,
        totalPage: 0
    },

    methods:{
        /*** Query inicial y de busqueda **/
        getContactos: function(page, search){
            if(search == null) {
                this.$http.get('/listados/contactos/' + page).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            } else {
                this.$http.get('/listados/contactos/' + page + "/"  + search).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            }
        },

        getSearch: function(search){
            if(search === null || search === 0){
                this.getContactos(1);
            } else {
                this.getContactos(1, search);
            }
        },

        /** querys de paginación **/

        setPage: function(pageNumber) {
            this.currentPage = pageNumber;
            var spage = (pageNumber + 1)
            if(this.searchKey != null){
                this.getClientes(spage, this.searchKey);
            } else {
                this.getClientes(spage);
            }

        },

        setTotalPage: function(){
            this.totalPage = Math.ceil(this.resultCount / this.itemsPerPage);
        },

        /** querys destroy **/

        /** Set info for destroy **/
        setDestroy: function(row){

            /** get info to destroy **/
            this.contactos.id = row.id;
            this.contactos.type = row.type;
            this.contactos.name = row.name;
            this.contactos.cargo = row.cargo;
            this.contactos.phone = row.phone;
            this.contactos.movil = row.movil;
            this.contactos.email = row.email;
            this.contactos.notes = row.note;

            /** warning message **/
            $('#modal2').openModal({
                dismisable: false
            });
        },

        /** Cancel detroy or edit **/
        modalDestroy: function(){

            /** clear info **/
            this.contactos.id = 0;
            this.contactos.type = '';
            this.contactos.name = '';
            this.contactos.cargo = '';
            this.contactos.phone = '';
            this.contactos.movil = '';
            this.contactos.email = '';
            this.contactos.notes = '';

            /** close warning **/
            $().closeModal();
        },

        onDestroy: function(){
            /** send destroy query **/
            this.$http.delete('/contactos/' +  this.contactos.id)
                .success(function(data, status, request){
                    this.getContactos(1);
                    this.modalDestroy();
                    Materialize.toast('El conctacto a sido eliminado', 3000);
                }).error(function(data, status, request){
                    this.getContactos(1);
                    this.modalDestroy();
                    Materialize.toast('hay un error en el envio', 3000);
                });
        },

        /** Edit querys **/

        setEdit: function(row){
            /** set register **/
            this.contactos.id = row.id;
            this.contactos.type = row.type;
            this.contactos.name = row.name;
            this.contactos.cargo = row.cargo;
            this.contactos.phone = row.phone;
            this.contactos.movil = row.movil;
            this.contactos.email = row.email;
            this.contactos.notes = row.notes;
            $(document).ready(function() {
                $('select').material_select();
            });
            /** edit form **/
            $('#modal3').openModal({
                dismisable: false
            });
        },

        submitEdit: function(e){
            e.preventDefault();
            $('#modal3').closeModal();
            var contactos = this.contactos;
            this.$http.put('/contactos/' + contactos.id, contactos).success(function (data, status, request) {
                Materialize.toast('El conctacto a sido editado exitosamente!!!', 3000);
                this.getContactos(1);
                this.modalDestroy();
            }).error(function(data, status, response){
                Materialize.toast('Hay un error en el envio de esta información!!!', 3000);
                this.modalDestroy();
            });
        },

        /** Create querys **/

        submitCreate: function(e){
            e.preventDefault();
            $('#modal1').closeModal();
            var contactos = this.newContacto;
            this.$http.post('/contactos/', contactos).success(function (data, status, request) {
                Materialize.toast('El conctacto a sido creado exitosamente!!!', 3000);
                this.getContactos(1);
                this.modalDestroy();
            }).error(function(data, status, response){
                Materialize.toast('Hay un error en el envio de esta información!!!', 3000);
                this.modalDestroy();
            });
        }
    },

    computed: {
        editError: function(){
            if( ! this.newContacto.name || ! this.newContacto.type) { return true }
            return false;
        }
    }
});