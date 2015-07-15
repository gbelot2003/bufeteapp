Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

v = new Vue({
    el: '#contactos-clientes',
    data:{
        contactoName:{
            id: 0,
            name: ''
        },
        selected: 0,
        showForm: false,
        showEdit: false,
        search: false,
        rows:[],
        cid: 0,
        searchText: '',
        contactos: {
            id: 0,
            cliente_id:this.cid,
            type: 'clientes',
            name: '',
            cargo: '',
            email: '',
            phone: '',
            movil: '',
            notes: '',
            showRow: false
        },
        collections: {
            phone:'',
            movil:'',
            email:''
        }
    },

    ready: function(){
        this.getContactos(this.cid);
    },

    methods: {
        getContactos: function(id){
            this.$http.get('/contactos-relacionados/contactos/' + id)
                .success(function(data){
                    this.$set('rows', data);
                })
                .error();
        },

        /** Forms methods **/
        setShowForm: function(){
          if(this.showForm == true) {
             return this.showForm = false;
          } else {
              this.showForm = true;
              this.search = false;
          }
        },

        setSearch: function(){
            if(this.search == false){
                this.showForm = false;
                this.search = true;
            } else {
             return this.search = false;
            }
        },

        closeForm: function(){
            this.showForm = false;
            this.showEdit = false;
            this.selected = 0;
            this.contactos = {
                id: 0,
                cliente_id:this.cid,
                type: 'clientes',
                cargo: '',
                name: '',
                email: '',
                phone: '',
                movil: '',
                notes: ''
            }
        },

        onSubmitForm: function(e){
            e.preventDefault();
            var contactos = this.contactos;
            this.$http.post('/contactos-relacionados/contactos/', contactos)
                .success(function(){
                    this.closeForm();
                    this.getContactos(this.cid);
                    Materialize.toast('Registro Creado y vinculado', 3000);

                })
                .error(function(){
                    Materialize.toast('Error en el envio', 5000);
                });
        },

        /** Edit Register **/
        editRegister: function(row){
            this.showEdit = true;
            this.contactos = {
                id: row.id,
                cliente_id:this.cid,
                cargo: row.cargo,
                type: 'clientes',
                name: row.name,
                email: row.email,
                phone: row.phone,
                movil: row.movil,
                notes: row.notes
            }
        },

        onSubmitFormEdit: function(e){
            e.preventDefault();
            var contactos = this.contactos;
            this.$http.put('/contactos-relacionados/contactos/' + contactos.id, contactos)
                .success(function(){
                    this.closeForm();
                    this.getContactos(this.cid);
                    Materialize.toast('Registro actualizado', 3000);
                })
                .error(function(){
                    Materialize.toast('Error en el envio', 5000);
                });
        },

        /** show selected **/
        selectedRow: function(row){
            var actual = this.selected;
            if(actual != 0 || row.selected == actual){
                this.selected = 0;
            } else {
                this.selected = row.id;
            }
        },

        /** eliminar o desvincular ***/

        OnModalDelete: function(row){
            $('#modal2').openModal({
                dismissible: false
            });
            this.contactoName.id = row.id;
            this.contactoName.name = row.name;
        },

        modalDestroy: function(){
            this.contactoName.id = 0;
            this.contactoName.name = '';

        },

        onDettach: function(){
            this.$http.get('/contactos-relacionados/contacto-deattach/' + this.contactos.id + '/' + this.contactos.cliente_id)
                .success(function(data){
                    this.showForm = false;
                    this.showEdit = false;
                    this.getContactos(this.cid);
                    Materialize.toast('Contacto desvinculado', 5000);
                }).error(function(data){
                    Materialize.toast('Error en el envio', 5000);
                });
        }

    }
});