require('./bootstrap');
import Vue from 'vue'

//Main pages
import App from './views/app.vue'
import Vuex from 'vuex'
Vue.use(Vuex)
import storeData from "./store/index"

const store = new Vuex.Store(
   storeData
)

const app = new Vue({
    el: '#app',
    components: { App }
});