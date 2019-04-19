import 'bootstrap';
import Vue from 'vue';
import VueRouter from 'vue-router';
import { RoutesDefault }  from './routes/default.js';
import axios from 'axios';

import App from './components/App.vue';

document.addEventListener("DOMContentLoaded", () => {

    window.axios = axios;
    window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

    Vue.use(VueRouter);

    new Vue({
        el: '#app',
        components: {
            App
        },
        router: RoutesDefault,
        template: '<App/>'
    });
});
