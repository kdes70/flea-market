export default {
    TOKEN_UPDATE(state, tokens) {
        console.log('tokens', tokens)
        state.tokens = tokens
    },
    SET_AUTH_USER(state, user) {
        console.log('setCurentUser', user);
        state.authUser = user
    },
    CLEAR_AUTH_USER(state) {
        state.authUser = null
        state.tokens = {
            access_token: null,
            expires_in: null,
            refresh_token: null,
            token_type: null,
        }
    },
}