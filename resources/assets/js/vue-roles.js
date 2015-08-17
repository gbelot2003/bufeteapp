Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

var v = new Vue({
    el: '#roles',
    ready: function(){
        this.getRoles(1);
        this.getPermissions();
    },
    data: {
        Roles:{
            id: 0,
            display_name: '',
            description: '',
            perms:[]
        },
        rows: [],
        errors: '',
        newRoles: {
            display_name: '',
            description: ''
        },
        permissions:{
            id:0,
            display_name:''
        },
        rolesName: [],
        message: '',
        searchKey: '',
        currentPage: 0,
        itemsPerPage: 0,
        resultCount: 0,
        totalPage: 0
    },

    methods:{
        getRoles: function(page, search){

            if(search == null) {
                this.$http.get('/listados/roles/' + page).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            } else {
                this.$http.get('/listados/roles/' + page + "/"  + search).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            }
        },

        getPermissions: function(){
            this.$http.get('/listados/permission-list').success(function(data) {
                this.$set('permissions', data);
            });
        },

        getSearch: function(search){
            if(search === null || search === 0){
                this.getRoles(1);
            } else {
                this.getRoles(1, search);
            }

        },

        setRoles: function(row){
            this.Roles.id = row.id;
            this.Roles.display_name = row.display_name;
            this.Roles.description = row.description;
            for(var i = 0; i < row.perms.length; i++){
                this.Roles.perms.push(row.perms[i].id);
            }

            this.getRolesById();
        },

        getRolesById: function(){

            $('#modal3').openModal(
                {dismissible: false}
            );
        },

        getCloseEdit: function(){
            this.Roles.id = 0;
            this.Roles.display_name = '';
            this.Roles.description = '';
            this.Roles.perms = [];
            $('#modal3').closeModal();
        },

        OnSubmitEditForm: function(e){
            e.preventDefault();
            var roles = this.Roles;
            this.$http.put('/roles/' + roles.id, roles).success(function (data, status, request) {
                this.message = 'El Role a sido registrado exitosamente';
                this.getRoles(1);

            }).error(function(data, status, response){
                this.message = 'Hay un error en el envio de esta información!!!';
                this.errors = response.display_name;
            });
            this.getCloseEdit();
            Materialize.toast(this.message, 2000) // 2000 is the duration of the toast
        },

        onSubmitForm: function(e) {
            e.preventDefault();
            var roles = this.newRoles;
            this.$http.post('/roles/', roles).success(function (data, status, request) {
                this.message = 'El Rol a sido registrado exitosamente';
                this.getRoles(1);
            }).error(function(data, status, request){
                this.message = 'Hay un error en el envio de esta información!!!';
            });

            Materialize.toast(this.message, 2000) // 2000 is the duration of the toast

            $('#modal1').closeModal();

            this.clearForm();
        },

        getDestroy:function(row){
            this.rolesName.push(row);
            $('#modal2').openModal(
                {dismissible: false}
            );
        },

        getCloseDestroy: function(){
            this.rolesName = [];
        },

        onDestroy:function(row){
            this.$http.delete('/roles/' +  row.id)
                .success(function(data, status, request){
                    this.message = "El archivo a sido eliminado";
                    this.getRoles(1);

                }).error(function(data, status, request){
                    this.message = 'Hay un error en el envio de esta información!!!';
                    this.getRoles(1);
                });
            Materialize.toast(this.message, 2000) // 2000 is the duration of the toast
            this.rolesName = [];
        },

        clearForm: function(){
            this.newRoles.display_name = '';
            this.newRoles.description = '';
        },

        setPage: function(pageNumber) {
            this.currentPage = pageNumber;
            var spage = (pageNumber + 1)
            this.getRoles(spage);
        },

        setTotalPage: function(){
            this.totalPage = Math.ceil(this.resultCount / this.itemsPerPage);
        },

        clearMessage: function(){
          this.message = '';
        },

        submitedSelect: function(id){
            if(this.Roles.perms.indexOf(id) > -1) return true;
            return false
        }
    },

    computed:{

        errors: function(){
            for (var key in this.newRoles){
                if( ! this.newRoles[key]) return true;
            }
            return false;
        },

        editError: function(){
            if( ! this.Roles.display_name || ! this.Roles.description ) { return true }
            return false;
        }
    }
});
