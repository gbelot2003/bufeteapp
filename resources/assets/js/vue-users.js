Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

var v = new Vue({
    el: '#usuarios',
    data: {
        showNoActives: false,
        userName: [],
        usuario: {
            id: 0,
            name: '',
            userstatus_id: 0,
            email: '',
            password: '',
            password_confirmation: '',
            roles:[]
        },
        rows: [],
        errors: '',
        roles:{
            id: 0,
            display_name: ''
        },
        newUser: {
            name: '',
            userstatus_id: 1,
            email: '',
            password: '',
            password_confirmation: '',
            roles:[]
        },
        userstatus: '',
        submitted: false,
        message: '',
        searchKey: '',
        currentPage: 0,
        itemsPerPage: 0,
        resultCount: 0,
        totalPage: 0
    },

    ready: function(){
        this.getUsuarios(1);
        this.getRoles();
    },

    methods:{

        getUserStatus: function(row){
            if(row.userstatus_id == 1){
               return 'Activo';
            }
            return 'desactivado';
        },

        getUsuarios: function(page, search){
            if(search == null) {
                this.$http.get('/listados/user/' + page).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            } else {
                this.$http.get('/listados/user/' + page + "/"  + search).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            }
        },

        getSearch: function(search){
            if(search === null || search === 0){
                this.getUsuarios(1);
            } else {
                this.getUsuarios(1, search);
            }

        },

        getRoles: function(){
            this.$http.get('/listados/roles-list/').success(function(data) {
                this.$set('roles', data);
            });
        },

        setUsers: function(row){
            this.usuario.id = row.id;
            this.usuario.name = row.name;
            this.usuario.email = row.email;
            this.usuario.userstatus_id = row.userstatus_id;

            for(var i = 0; i < row.roles.length; i++){
                this.usuario.roles.push(row.roles[i].id);
            }
            this.getUserById();
        },

        submitedSelect: function(id){
            if(this.usuario.roles.indexOf(id) > -1) return true;
            return false
        },

        getUserById: function(){
            $('#modal3').openModal(
                {dismissible: false}
            );
        },

        getCloseEdit: function(){
            this.usuario.id = '';
            this.usuario.name = '';
            this.usuario.userstatus_id = '';
            this.usuario.email = '';
            this.usuario.roles = [];
            $('#modal3').closeModal();
        },


        clearForm: function(){
            this.newUser.name = '';
            this.newUser.email = '';
        },

        setPage: function(pageNumber) {
            this.currentPage = pageNumber;
            var spage = (pageNumber + 1)
            this.getUsuarios(spage);
        },

        setTotalPage: function(){
            this.totalPage = Math.ceil(this.resultCount / this.itemsPerPage);
        },

        OnSubmitEditForm: function(e){
            e.preventDefault();
            var usuarios = this.usuario;
            this.$http.put('/usuarios/' + usuarios.id, usuarios).success(function (data, status, request) {
                this.message = 'El Role a sido registrado exitosamente';
                this.getUsuarios(1);
                this.submitted = true;

            }).error(function(data, status, response){
                this.message = 'Hay un error en el envio de esta información!!!';
                this.errors = response.display_name;
            });
            this.getCloseEdit();
            this.submitted = true;
        },

        onSubmitForm: function(e) {
            e.preventDefault();
            var usuario = this.newUser;
            this.$http.post('/usuarios/', usuario).success(function (data, status, request) {
                this.message = 'El Rol a sido registrado exitosamente';
                this.getUsuarios(1);
            }).error(function(data, status, request){
                this.message = 'Hay un error en el envio de esta información!!!';
            });

            this.submitted = true;

            $('#modal1').closeModal();

            this.clearForm();
        },

        getCloseDestroy: function(){
            this.userName = [];
        },

        getDestroy:function(row){
            if(row.userstatus_id == 1){
                this.userName.push(row);
                $('#modal2').openModal(
                    {dismissible: false}
                );
            } else {
                this.userName.push(row);
                $('#modal4').openModal(
                    {dismissible: false}
                );
            }


        },

        onDestroy:function(row){
            this.$http.get('/usuarios/setstatus/' +  row.id)
                .success(function(data, status, request){
                    this.message = "El archivo a sido modificado";
                    this.getUsuarios(1);
                }).error(function(data, status, request){
                    this.message = 'Hay un error en el envio de esta información!!!';
                    this.getUsuarios(1);
                });
            this.submitted = true;
            this.userName = [];
        }
    },

    computed:{

        errors: function(){
            for (var key in this.newUser){
                if( ! this.newUser[key]){
                    return true;
                }
            }

            if(this.newUser.password != this.newUser.password_confirmation){
                return true;
            }

            return false;
        },

        editError: function(){
            if( ! this.usuario.name || ! this.usuario.email) {
                return true
            }

            if( this.usuario.password != this.usuario.password_confirmation){
                return true
            }
            return false;
        },

        userStatusPreset: function(){
            if(this.showNoActives == false) {
                return '1';
            }
            return null;
        }

    }
});