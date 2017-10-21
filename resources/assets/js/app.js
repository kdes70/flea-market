require('./bootstrap')

window.Vue = require('vue')

import NProgress from 'vue-nprogress'
import {sync} from 'vuex-router-sync'
// import components
import App from './components/App.vue'
import API from './Api/index'
import router from './router'
import store from './vuex/index'

Vue.use(NProgress)

window.API = API

sync(store, router)

const nprogress = new NProgress({parent: '.nprogress-container'})


const {state} = store
const {config} = state.ui

router.beforeEach((route, redirect, next) => {
    if (config.mobile && config.sidebar) {
        config.sidebar = false
    }
    console.log(config.sidebar);
    next()

})


Vue.config.debug = true
Vue.config.devTools = true
Vue.config.productionTip = false


const app = new Vue({
    el: '#app',
    router,
    store,
    nprogress,
    template: '<App/>',
    components: {App}
});
