import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from 'vuex-persistedstate'

Vue.use(Vuex);

import createLogger from '../plugins/logger'

import ui from './modules/ui/ui'
import category from './modules/category/category'
import ads from './modules/ads/ads'
import auth from './modules/auth/auth'

export default new Vuex.Store({
    modules: {
        ui,
        category,
        ads,
        auth,
    },
    strict: true,
    plugins: [createPersistedState(), createLogger()]
});