Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

var v = new Vue({
    el: '#permisos',
    ready: function(){
        this.getPermisos(1);
    },
    data: {
        rows: [],
        errors: '',
        permission:{
            id: 0,
            display_name: '',
            description: ''
        },
        newPerm: {
            display_name: '',
            description: ''
        },
        permsName: [],
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

        setPermission: function(row){
            this.permission.id = row.id;
            this.permission.display_name = row.display_name;
            this.permission.description = row.description;

            this.getPermisosById();
        },

        getPermisosById: function(){

             $('#modal3').openModal(
                {dismissible: false}
            );
        },

        getCloseEdit: function(){
            this.permission.id = 0;
            this.permission.display_name = '';
            this.permission.description = '';
            $('#modal3').closeModal();
        },

        OnSubmitEditForm: function(e){
            e.preventDefault();
            var permis = this.permission;
            this.$http.put('/permisos/' + permis.id, permis).success(function (data, status, request) {
                this.message = 'El permiso a sido editado exitosamente';
                this.getPermisos(1);
                Materialize.toast(this.message, 2000) // 2000 is the duration of the toast
            }).error(function(data, status, response){
                this.message = 'Hay un error en el envio de esta información!!!';
                this.errors = response.display_name;
                Materialize.toast(this.message, 2000) // 2000 is the duration of the toast
            });

            this.getCloseEdit()
        },

        onSubmitForm: function(e) {
            e.preventDefault();
            var perms = this.newPerm;
            this.$http.post('/permisos', perms).success(function (data, status, request) {
                this.message = 'El permiso a sido registrado exitosamente';
                this.getPermisos(1);
                Materialize.toast(this.message, 2000) // 2000 is the duration of the toast
            }).error(function(data, status, request){
                this.message = 'Hay un error en el envio de esta información!!!';
                Materialize.toast(this.message, 2000) // 2000 is the duration of the toast
            });

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
                this.message = "El permiso a sido eliminado";
                this.getPermisos(1);
                Materialize.toast(this.message, 2000) // 2000 is the duration of the toast
            }).error(function(data, status, request){
                    this.message = 'Hay un error en el envio de esta información!!!';
                    this.getPermisos(1);
                    Materialize.toast(this.message, 2000) // 2000 is the duration of the toast
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
        },

        editError: function(){
            if( ! this.permission.display_name || ! this.permission.description ) { return true }
            return false;
        }
    }
});
