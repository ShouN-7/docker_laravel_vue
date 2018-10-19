import Vue from 'vue';
import VueRouter from 'vue-router';

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
Window.Vue = require('vue');

//Vue.use(VueRouter.install);
Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

//const Home = { template: '<div>home</div>' }
//const About = { template: '<div>about</div>' }

const routes = [
    { 
        path: '/',
        component: require('./components/Index.vue')
    },
    {
        path: '/about',
        component: require('./components/About.vue')
    },
    {
        path: '/login',
        component: require('./components/Login.vue')
    }
];

const router = new VueRouter({
    routes,
    mode: 'history'
});

//export default new VueRouter({routes});

const app = new Vue({
    el: '#app',
    router
});

//Vue.config.devtools = true;
