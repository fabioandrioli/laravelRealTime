require('./bootstrap');

import Vue from 'vue'
import VueToastify from 'vue-toastify'

Vue.use(VueToastify)

Vue.component('posts-component', require('./components/posts/Post.vue').default);

const app = new Vue({
    el: '#app'
})