/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('nav-bar-header', require('./components/Header/NavBar.vue').default);
Vue.component('footer-container', require('./components/Footer/Footer.vue').default);
Vue.component('left-side-menu', require('./components/Header/LeftSideMenu.vue').default);
Vue.component('content-page', require('./components/Home/Content.vue').default);
// Vue.component('head-page', require('./components/Header/Head.vue').default);
Vue.component('layout-component', require('./components/layout/Layout.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const wrapper = new Vue({
    el: '#wrapper',
});


