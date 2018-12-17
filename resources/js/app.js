//require('./bootstrap');

window.Vue = require('vue');

// import Toastr from 'vue-toastr';

// Vue.use(Toastr);

let axios = require('axios');

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('gpa-component', require('./components/GradePointAverage.vue'));

const app = new Vue({
    el: '#app',
    created() {
        console.log('App started');
    }
});
