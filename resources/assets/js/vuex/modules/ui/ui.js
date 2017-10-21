import config from '../../config'

const state = {
    config,
}

const mutations = {
    SIDEBAR(state, status = false) {
        state.config.sidebar = status
    }
}

const actions = {

    // Sidebar: show, hide, toggle
    SHOW_SIDEBAR({commit}) {
        commit('SIDEBAR', true)
    },
    HIDE_SIDEBAR({commit}) {
        commit('SIDEBAR', false)
    },
    TOGGLE_SIDEBAR({commit, state}) {
        commit('SIDEBAR', !state.config.sidebar)
    }
}

export default {
    state,
    mutations,
    actions
}