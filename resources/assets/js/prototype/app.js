import Vue from 'vue';
import VueRouter from 'vue-router';

import App from './components/App.vue';

import Login from './screens/Login.vue';
import Register from './screens/Register.vue';

Vue.use(VueRouter);

const routes = [
    {
        path: '/prototype/login',
        name: 'login',
        component: Login,
    }, {
        path: '/prototype/register',
        name: 'register',
        component: Register,
    },
];

const router = new VueRouter({
    mode: 'history',
    routes,
});

new Vue({
    el: '#app',
    router,
    render: h => h(App),
});
