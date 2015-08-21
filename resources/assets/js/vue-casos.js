Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');
moment.locale('es');
moment.locale();

v = new Vue({
    el: '#casos',
    ready: function(){
        this.getCasos(1);
    },
    data: {
        rows:[],
        showNoActives: false,
        cerrados: '',
        searchKey: '',
        currentPage: 0,
        itemsPerPage: 0,
        resultCount: 0,
        totalPage: 0
    },

    methods: {
        getCasos: function(page, search){
            if(search == null) {
                this.$http.get('/listados/casos/' + page).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            } else {
                this.$http.get('/listados/casos/' + page + "/"  + search ).success(function(data){
                    this.$set('rows', data.items);
                    this.$set('resultCount', data.total);
                    this.$set('itemsPerPage', data.itemsPerPage);
                    this.setTotalPage();
                });
            }
        },

        getSearch: function(search){
            if(search === null || search === 0){
                this.getCasos(1);
            } else {
                this.getCasos(1, search);
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

        estadoCaso: function(row){
            if(row == false){
                return 'Cerrado'
            }
            return 'Abierto'
        },

        setReadTime: function(row){
            //
            return moment(row).format('dddd DD MMMM YYYY');
        }
    },
    computed:{
        userStatusPreset: function(){
            if(this.showNoActives == false) {
                return 'true';
            }
            return null;
        }
    }

});