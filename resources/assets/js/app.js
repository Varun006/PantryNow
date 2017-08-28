
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

global.VueEvents = new Vue({});
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('cart', require('./components/Cart.vue'));
Vue.component('basket', require('./components/myCart.vue'));
Vue.component('search', require('./components/Search.vue'));
Vue.component('filters', require('./components/Filters.vue'));
Vue.component('category-products', require('./components/CategoryProducts.vue'));
Vue.component('page-product-search', require('./components/productFilterSearch.vue'));
Vue.component('cart-table', require('./components/CartTable.vue'));
Vue.component('cart-totals', require('./components/cartTotal.vue'));
Vue.component('modal-box', require('./components/Modal.vue'));
Vue.component('thank-you', require('./components/ThankYou.vue'));
Vue.component('login-modal', require('./components/LoginModal.vue'));
Vue.component('logged-in-modal', require('./components/loggedInModal.vue'));

const app = new Vue({
    el: '#app',
    methods: {
        reschedule: function () {
            VueEvents.$emit('show-modal');
        }
    }
});
