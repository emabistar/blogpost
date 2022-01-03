require('./bootstrap');
import Vue from 'vue'

Vue.component('navbar', require('../components/Navbar.vue').default);
Vue.component('post-list', require('../components/PostList.vue').default);


const app = new Vue({
    el: '#app',
});
