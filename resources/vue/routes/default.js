import Vue from 'vue';
import VueRouter from 'vue-router';

/** View Components **/
import Home from '../components/views/Home.vue';
import Page from '../components/views/Page.vue';

Vue.use( VueRouter );

export const RoutesDefault = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home',
            meta: { layout: 'index' },
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: Page
        },
        {
            path: '/contact',
            name: 'contact',
            component: Page
        },
    ]
});
