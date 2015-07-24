Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('value');

v = new Vue({
    el: '#show-casos',
    data: {
        caso_id: 0
    }
});