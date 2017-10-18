import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

import createLogger from '../plugins/logger'

import ui from './modules/ui/ui'
import category from './modules/category/category'
import ads from './modules/ads/ads'

export default new Vuex.Store({
    modules: {
        ui,
        category,
        ads,
    },
    strict: true,
    plugins: [createLogger()]
});