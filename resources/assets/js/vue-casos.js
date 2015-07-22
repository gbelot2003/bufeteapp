Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

v = new Vue({
    el: '#casos',
    ready: function(){
        this.getCasos(1);
    },
    data: {
        rows:[],
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
                this.$http.get('/listados/casos/' + page + "/"  + search).success(function(data){
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

        }
    }
});