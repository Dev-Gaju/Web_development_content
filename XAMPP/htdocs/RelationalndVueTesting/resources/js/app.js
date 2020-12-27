/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// AlertBarAfter Save
//

/** Vform use to save data*/



import VueRouter from 'vue-router'
Vue.use(VueRouter)

const routes = [{
        path: '/post',
        component: require('./components/ExampleComponent.vue')
    },
    // {
    //     path: '/brand',
    //     component: require('./components/BrandComponent.vue')
    // },
    // {
    //     path: '/product',
    //     component: require('./components/ProductComponent.vue')
    // }
];

const router = new VueRouter({
    mode: 'history',
    routes
})




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    router
});
