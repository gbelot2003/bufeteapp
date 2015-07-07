$(document).ready(function(){
    $('#create').on('click', function(){
        $('#modal1').openModal({
            dismissible: false
        });
    });
});

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

var v = new Vue({
    el: '#permisos',
    ready: function(){
        this.getPermisos(1);
    },
    data: {
        rows: [],
        permission: {
            id: '',
            display_name: '',
            description: ''
        },
        newPerm: {
            display_name: '',
            description: ''
        },
        permsName: [],
        submitted: false,
        message: '',
        searchKey: '',
        currentPage: 0,
        itemsPerPage: 0,
        resultCount: 0,
        totalPage: 0
    },

    methods:{
        getPermisos: function(page, search){

            if(search == null) {
                this.$http.get('/listados/permisos/' + page).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            } else {
                this.$http.get('/listados/permisos/' + page + "/"  + search).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            }
        },

        getSearch: function(search){
            if(search === null || search === 0){
                this.getPermisos(1);
            } else {
                this.getPermisos(1, search);
            }

        },

        getPermisosById: function(id){
           this.$http.get('/permisos/' + id + '/edit').success(function(data){
                this.$set('permission', data);
           });
        },


        onSubmitForm: function(e) {
            e.preventDefault();
            var perms = this.newPerm;
            this.$http.post('/permisos', perms).success(function (data, status, request) {
                this.message = 'El permiso a sido registrado exitosamente';
                this.getPermisos(1);
            }).error(function(data, status, request){
                this.message = 'Hay un error en el envio de esta información!!!';
            });

            this.submitted = true;

            $('#modal1').closeModal();

            this.clearForm();
        },

        getDestroy:function(row){
            this.permsName.push(row);
            $('#modal2').openModal(
                {dismissible: false}
            );
        },

        getCloseDestroy: function(){
            this.permsName = [];
        },

        onDestroy:function(row){
            this.$http.delete('/permisos/' +  row.id)
            .success(function(data, status, request){
                this.message = "El archivo a sido eliminado"
                this.getPermisos(1);
            }).error(function(data, status, request){
                    this.message = 'Hay un error en el envio de esta información!!!';
                    this.getPermisos(1);
            });

            this.permsName = [];
        },

        clearForm: function(){
            this.newPerm.display_name = '';
            this.newPerm.description = '';
        },

        setPage: function(pageNumber) {
            this.currentPage = pageNumber;
            var spage = (pageNumber + 1)
            this.getPermisos(spage);
        },

        setTotalPage: function(){
            this.totalPage = Math.ceil(this.resultCount / this.itemsPerPage);
        }
    },

    computed:{
        errors: function(){
            for (var key in this.newPerm){
                if( ! this.newPerm[key]) return true;
            }
            return false;
        }
    }
});
