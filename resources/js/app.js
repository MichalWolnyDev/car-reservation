require('./bootstrap');
import Vue from 'vue'

//Main pages
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import App from './views/app.vue'
import Dashboard from './views/Dashboard.vue'
import Form from './views/Form.vue'
import storeData from "./store/index"

Vue.use(Vuex);
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'form',
            component: Form
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard,
        },
    ],
});

const store = new Vuex.Store(
   storeData
)
Vue.prototype.$store = store

const app = new Vue({
    el: '#app',
    components: { App },
    router
});