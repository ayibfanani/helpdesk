
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Partials
Vue.component('sidebar', require('./components/partials/Sidebar.vue'));
Vue.component('navbar', require('./components/partials/Navbar.vue'));

Vue.component('alert', require('./components/Alert.vue'));
Vue.component('register', require('./components/Register.vue'));
Vue.component('login', require('./components/Login.vue'));
Vue.component('pagination', require('./components/Pagination.vue'));
Vue.component('modal-form', require('./components/ModalForm.vue'));

// Tickets
Vue.component('all-tickets', require('./components/tickets/All.vue'));
Vue.component('list-ticket', require('./components/tickets/List.vue'));

const app = new Vue({
    el: '#app'
});
