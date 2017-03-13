
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
Vue.component('modal', require('./components/Modal.vue'));

// Tickets
Vue.component('all-tickets', require('./components/tickets/All.vue'));
Vue.component('ticket-show', require('./components/tickets/Show.vue'));

// Knowledges
Vue.component('knowledges', require('./components/knowledges/All.vue'));
Vue.component('knowledge-posts', require('./components/knowledges/posts/Posts.vue'));
Vue.component('knowledge-post-form', require('./components/knowledges/posts/Form.vue'));

// Categories
Vue.component('all-categories', require('./components/taxonomies/categories/All.vue'));
// Tags
Vue.component('all-tags', require('./components/taxonomies/tags/All.vue'));

// Teams
Vue.component('all-teams', require('./components/teams/All.vue'));

// const store = new Vuex.Store({
//     state: {
//         modal: false,
//         alert: false,
//     },
//     mutations: {
//         modal(state, value) {
//             state.modal = value
//         },
//         alert(state, value) {
//             state.alert = value
//         }
//     },
//     actions: {}
// })

Vue.mixin({
    methods: {
        showModal() {
            this.$root.modal = true
        },
        closeModal() {
            this.$root.modal = false
        }
    }
})

const app = new Vue({
    // store,
    el: '#app',
    data() {
        return {
            modal: false
        }
    }
});
