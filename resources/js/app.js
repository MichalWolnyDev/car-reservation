require('./bootstrap');
import Vue from 'vue'

//Main pages
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import VueCarousel from 'vue-carousel';

import App from './views/app.vue'
import Dashboard from './views/Dashboard.vue'
// import Form from './views/Form.vue'
import Index from './views/Index.vue'
import Login from './views/Login.vue'
import Register from './views/Register.vue'
import DashboardProfile from './dashboardViews/Profile.vue'
import DashboardBooked from './dashboardViews/Booked.vue'
import storeData from "./store/index"

Vue.use(VueCarousel);
Vue.use(Vuex);
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            name: 'index',
            component: Index
        },
        // {
        //     path: '/',
        //     name: 'form',
        //     component: Form
        // },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard,
            children: [{
                    path: '/dashboard/profile',
                    name: 'profile',
                    component: DashboardProfile
                },
                {
                    path: '/dashboard/booked',
                    name: 'booked',
                    component: DashboardBooked
                }
            ],
            beforeEnter: (to, form, next) => {
                axios.get('/api/authenticated').then(() => {
                    next()
                }).catch(() => {
                    return next({ name: 'login' })
                })
            }
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
        },
    ],
});

const store = new Vuex.Store(
    storeData
)
Vue.prototype.$store = store

Vue.component('navbar', require('./components/Nav.vue').default);
Vue.component('footer-comp', require('./components/Footer.vue').default);

const app = new Vue({
    el: '#app',
    components: { App },
    router
});