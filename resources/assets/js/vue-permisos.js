$(document).ready(function(){
    $('#create').on('click', function(){
        $('#modal1').openModal({
            dismissible: false
        });
    });

    $('#permisos-table').dataTable();
});

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

var v = new Vue({
    el: '#permisos',
    ready: function(){
        this.getPermisos();
    },
    data: {
        rows: [],
        permission: '',
        newPerm: {
            display_name: '',
            description: ''
        },
        submitted: false,
        message: '',
        searchKey: '',
        currentPage: 0,
        itemsPerPage: 10,
        resultCount: 0
    },

    computed:{
        errors: function(){
            for (var key in this.newPerm){
                if( ! this.newPerm[key]) return true;
            }
            return false;
        },

        totalPages: function() {
            return Math.ceil(this.resultCount / this.itemsPerPage)
        }
    },

    methods:{
        getPermisos: function(){
            this.$http.get('/listados/permisos').success(function(data){
                this.$set('rows', data);
            });
        },

        getPermisosById: function(id){
           this.$http.get('/listados/permisos-by-id/' + id).success(function(data){
                this.$set('permission', data);
           });
        },

        onSubmitForm: function(e) {
            e.preventDefault();

            var perms = this.newPerm;

            this.$http.post('/permisos', perms).success(function (data, status, request) {
                this.message = 'El permiso a sido registrado exitosamente';
                this.getPermisos();
            }).error(function(data, status, request){
                this.message = 'Hay un error en el envio de esta información!!!';
            });

            this.submitted = true;


            $('#modal1').closeModal();

            this.clearForm();

        },

        clearForm: function(){
            this.newPerm.display_name = '';
            this.newPerm.description = '';
        },

        setPage: function(pageNumber) {
            this.currentPage = pageNumber
        },

        removeItem:function(row){
            this.rows.$remove(row);
        }
    },

    filters: {
        paginate: function(list) {
            this.resultCount = list.length
            if (this.currentPage >= this.totalPages) {
                this.currentPage = Math.max(0, this.totalPages - 1)
            }
            var index = this.currentPage * this.itemsPerPage
            return list.slice(index, index + this.itemsPerPage)
        }
    }
});
