$(document).ready(function(){
    $('#create').on('click', function(){
        $('#modal1').openModal({
            dismissible: false
        });
    });
});

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

var v = new Vue({
    el: '#clientes',
    ready: function(){
        this.getClientes(1);
    },
    data: {
        rows:[],
        errors: '',
        cliente: {
            id:0,
            name: '',
            email: '',
            phone: '',
            movil: '',
            details: ''
        },
        newCliente:{
            name:''
        },
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
        }
    }
});