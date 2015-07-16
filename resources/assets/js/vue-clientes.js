Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

var v = new Vue({
    el: '#clientes',
    ready: function(){
        this.getClientes(1);
    },
    data: {
        newCliente:{
            name: '',
            email: '',
            phone: '',
            movil: '',
            details: ''
        },

        cliente: {
            id: 0,
            name: '',
            email: '',
            phone: '',
            movil: '',
            details: ''
        },
        rows:[],
        errors: '',
        clienteName:[],
        submitted: false,
        message: '',
        searchKey: '',
        currentPage: 0,
        itemsPerPage: 0,
        resultCount: 0,
        totalPage: 0
    },

    methods: {
        /*** Query inicial y de busqueda **/
        getClientes: function(page, search){
            if(search == null) {
                this.$http.get('/listados/clientes/' + page).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            } else {
                this.$http.get('/listados/clientes/' + page + "/"  + search).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            }
        },

        getSearch: function(search){
            if(search === null || search === 0){
                this.getClientes(1);
            } else {
                this.getClientes(1, search);
            }

        },

        /** query de envio de formulario de creación **/
        onSubmitForm: function(e) {
            e.preventDefault();
            var perms = this.newCliente;
            this.$http.post('/clientes', perms).success(function (data, status, request) {
                this.message = 'El cliente a sido registrado exitosamente';
                this.getClientes(1);
            }).error(function(data, status, request){
                this.message = 'Hay un error en el envio de esta información!!!';
            });

            this.submitted = true;

            this.clearForm();
        },

        clearForm: function(){
            this.newCliente.id = 0;
            this.newCliente.name = '';
            this.newCliente.details = '';
            this.newCliente.phone = '';
            this.newCliente.movil = '';
            this.newCliente.email = '';
            $('#modal1').closeModal();
        },

        /** Eventos de edición de registro **/

        getClienteById: function(){

            $('#modal3').openModal(
                {dismissible: false}
            );
        },

        setCliente: function(row){
            this.cliente.id = row.id;
            this.cliente.name = row.name;
            this.cliente.details = row.details;
            this.cliente.phone = row.phone;
            this.cliente.movil = row.movil;
            this.cliente.email = row.email;

            this.getClienteById();
        },

        getCloseEdit: function(){
            this.cliente.id = 0;
            this.cliente.name = '';
            this.cliente.details = '';
            this.cliente.phone = '';
            this.cliente.movil = '';
            this.cliente.email = '';
            $('#modal3').closeModal();
        },

        OnSubmitEditForm: function(e){
            e.preventDefault();
            var cliente = this.cliente;
            this.$http.put('/clientes/' + cliente.id, cliente).success(function (data, status, request) {
                this.message = 'El cliente a sido editado exitosamente';
                this.getClientes(1);
                this.submitted = true;

            }).error(function(data, status, response){
                this.message = 'Hay un error en el envio de esta información!!!';
                this.errors = response.name;
                this.submitted = true;
            });
            this.getCloseEdit()
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

        /** eliminar o desvincular ***/

        OnModalDelete: function(row){
            $('#modal2').openModal({
                dismissible: false
            });
            this.cliente.id = row.id;
            this.cliente.name = row.name;
            this.cliente.details = row.details;
            this.cliente.phone = row.phone;
            this.cliente.movil = row.movil;
            this.cliente.email = row.email;
        },

        modalDestroy: function(){
            this.cliente.id = 0;
            this.cliente.name = '';
            this.cliente.details = '';
            this.cliente.phone = '';
            this.cliente.movil = '';
            this.cliente.email = '';
        },

        onDestroy:function(){
            this.$http.delete('/clientes/' +  this.cliente.id)
                .success(function(data, status, request){
                    this.getClientes(1);
                    Materialize.toast('El cliente a sido eliminado', 3000);
                }).error(function(data, status, request){
                    this.getClientes(1);
                    Materialize.toast('hay un error en el envio', 3000);
                });
            this.submitted = true;
            this.cliente = [];
        }

    },

    computed:{

        errors: function(){
            if( ! this.newCliente.name ) { return true }
            return false;
        },

        editError: function(){
            if( ! this.cliente.name ) { return true }
            return false;
        }
    }
});